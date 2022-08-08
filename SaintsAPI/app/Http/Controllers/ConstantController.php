<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Merit;
use Carbon\Exceptions\Exception;


class ConstantController extends Controller
{
    // LANGUAGES
    public function test()
    {
        return response()->json(["message" => "qualquer"], 201);
    }

    public function getAllLanguages()
    {
        try {
            $languages = Language::all();
            return response()->json($languages, 200);
        } catch (Exception $exception) {
            $response = ["message" => "Something goes wrong"];
            return response($response, 500);
        }
    }

    public function showLanguage($id)
    {
        try {
            $language = Language::findOrFail($id);
            return response()->json($language, 200);
        } catch (Exception $exception) {
            $response = ["message" => "Something goes wrong"];
            return response($response, 500);
        }
    }

    public function storeLanguage(Request $request)
    {
        try {
            $fields = $request->validate([
                'constant_number' => 'required',
                'constant_name' => 'required'
            ]);

            Language::create($fields);

            $response = ["message" => "The Language Was Added Successfully"];
            return response($response, 201);
        } catch (Exception $exception) {
            $response = [
                "message" => "Something goes wrong",
                "detais" => $exception
            ];
            return response($response, 500);
        }
    }

    public function destroyLanguage($id)
    {
        try {
            Language::findOrFail($id)->delete();
            $response = ["message" => "The Language was deleted successfully"];
            return response($response, 200);
        } catch (Exception $exception) {
            $response = [
                "message" => "Something goes wrong",
                "details" => $exception
            ];
            return response($response, 500);
        }
    }



    // MERITS
    public function storeMerit(Request $request)
    {
        try {
            $fields = $request->validate([
                'constant_number' => 'required',
                'constant_name' => 'required'
            ]);

            Merit::create($fields);

            $response = ["message" => "The Merit Was Added Successfully"];
            return response($response, 201);
        } catch (\Throwable $exception) {
            $response = [
                "message" => "Something goes wrong",
                "detais" => $exception
            ];
            return response($response, 500);
        }
    }

    public function indexMerit()
    {
        try {
            $merits = Merit::all();
            return response()->json($merits, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => "something goes wrong",
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function showMerit($id)
    {
        try {
            $merit = Merit::findOrFail($id);
            return response()->json($merit, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => 'something goes wrong',
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function destroyMerit($id)
    {
        try {
            Merit::findOrFail($id)->delete();
            $response = [
                'message' => 'The merit was deleted successfully'
            ];
            return response()->json($response, 200);
        } catch (\Throwable $th) {
            $response = [
                "message" => "Something goes wrong",
                "details" => $th
            ];
            return response()->json($response, 500);
        }
    }
}
