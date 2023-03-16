<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {

        try {
            $fields = $request->validate([

                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'occupation' => 'required',
                'recovery_email' => 'required',
                'phone_number' => 'required',
                'country' => 'required',
                'state_province' => 'required',
                'city' => 'required',
            ]);

            User::create($fields);
            $response = [
                'message' => 'The User Was created successfully'
            ];
            return response()->json($response, 201);
        } catch (\Throwable $th) {
            //throw $th;
            $response = [
                'message' => 'Something goes wrong',
                'details' => $th
            ];
            return response()->json($response, 500);
        }
    }



    // public function index()
    // {
    //     try {
    //         $apiElements = ApiElement::All();
    //         return response()->json($apiElements, 200);
    //     } catch (\Throwable $th) {
    //         $response = [
    //             'message' => 'Something goes wrong',
    //             'details' => $th
    //         ];

    //         return response()->json($response, 500);
    //     }
    // }

    // public function show($id)
    // {
    //     try {
    //         $apiElement = ApiElement::FindOrFail($id);
    //         return response()->json($apiElement, 200);
    //     } catch (\Throwable $th) {
    //         $response = [
    //             'message' => 'Something goes wrong',
    //             'details' => $th
    //         ];

    //         return response()->json($response, 500);
    //     }
    // }

    // public function edit(Request $request, $id)
    // {
    //     try {
    //         $fields = $request->validate([
    //             'table_element' => 'required',
    //             'semantic_name' => 'required',
    //             'register_id' => 'required',
    //         ]);

    //         ApiElement::findOrFail($id)->update($fields);

    //         $response = ['message' => 'The Api Element was updated successfully'];

    //         return response()->json($response, 200);
    //     } catch (\Throwable $th) {

    //         $response = [
    //             'message' => 'Something goes wrong',
    //             'details' => $th
    //         ];

    //         return response()->json($response, 500);
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         ApiElement::findOrFail($id)->delete();
    //         $response = [
    //             'message' => 'The Api Element was deleted successfully'
    //         ];
    //         return response()->json($response, 200);
    //     } catch (\Throwable $th) {
    //         $response = [
    //             'message' => 'Something goes wrong',
    //             'details' => $th
    //         ];
    //         return response()->json($response, 500);
    //     }
    // }
}
