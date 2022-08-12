<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserActionHistory;

class UserActionHistoryController extends Controller
{
    public function store(Request $request)
    {

        try {
            $fields = $request->validate([
                'user_id' => 'required',
                'action_id' => 'required',
                'api_element_id' => 'required',
            ]);

            UserActionHistory::create($fields);

            $response = ["message" => "The Action Was Registered Successfully"];

            return response()->json($response, 201);
        } catch (\Throwable $th) {
            $response = [
                "message" => "Something goes wrong",
                "details" => $th
            ];
        }
    }

    public function index()
    {
        try {
            //code...
            $actionHistory = UserActionHistory::all();
            return response()->json($actionHistory, 200);
        } catch (\Throwable $th) {
            $response = [
                "message" => "Something goes wrong",
                "details" => $th
            ];
            return response()->json($response, 500);
        }
    }

    public function show($id)
    {
        try {
            $registeredAction = UserActionHistory::findOrFail($id);
            return response()->json($registeredAction, 200);
        } catch (\Throwable $th) {
            //throw $th;
            $response = [
                'message' => 'Something goes wrong',
                'details' => $th
            ];
            return response()->json($response, 500);
        }
    }

    public function destroy($id)
    {
        try {
            UserActionHistory::findOrFail($id)->delete();
            $response = [
                'message' => 'The registered action-history was deleted successfully'
            ];
            return response()->json($response, 200);
        } catch (\Throwable $th) {
            //throw $th;
            $response = [
                'message' => 'Something goes wrong',
                'details' => $th
            ];
            return response()->json($response, 500);
        }
    }
}
