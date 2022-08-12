<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Merit;
use App\Models\ArtifactType;
use App\Models\LinkType;
use App\Models\Action;
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


    // ARTIFACT TYPE
    public function storeArtifactType(Request $request)
    {
        try {
            $fields = $request->validate([
                'constant_number' => 'required',
                'constant_name' => 'required'
            ]);

            ArtifactType::create($fields);

            $response = ["message" => "The ArtifactType Was Added Successfully"];
            return response($response, 201);
        } catch (\Throwable $exception) {
            $response = [
                "message" => "Something goes wrong",
                "detais" => $exception
            ];
            return response($response, 500);
        }
    }

    public function indexArtifactType()
    {
        try {
            $types = ArtifactType::all();
            return response()->json($types, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => "something goes wrong",
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function showArtifactType($id)
    {
        try {
            $type = ArtifactType::findOrFail($id);
            return response()->json($type, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => 'something goes wrong',
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function destroyArtifactType($id)
    {
        try {
            ArtifactType::findOrFail($id)->delete();
            $response = [
                'message' => 'The artifact type was deleted successfully'
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


    // LINK TYPE
    public function storeLinkType(Request $request)
    {
        try {
            $fields = $request->validate([
                'constant_number' => 'required',
                'constant_name' => 'required'
            ]);

            LinkType::create($fields);

            $response = ["message" => "The link type Was Added Successfully"];
            return response($response, 201);
        } catch (\Throwable $exception) {
            $response = [
                "message" => "Something goes wrong",
                "detais" => $exception
            ];
            return response($response, 500);
        }
    }

    public function indexLinkType()
    {
        try {
            $types = LinkType::all();
            return response()->json($types, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => "something goes wrong",
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function showLinkType($id)
    {
        try {
            $type = LinkType::findOrFail($id);
            return response()->json($type, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => 'something goes wrong',
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function destroyLinkType($id)
    {
        try {
            LinkType::findOrFail($id)->delete();
            $response = [
                'message' => 'The link type was deleted successfully'
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


    // ACTION
    public function storeAction(Request $request)
    {
        try {
            $fields = $request->validate([
                'constant_number' => 'required',
                'constant_name' => 'required'
            ]);

            Action::create($fields);

            $response = ["message" => "The Action Was Added Successfully"];
            return response($response, 201);
        } catch (\Throwable $exception) {
            $response = [
                "message" => "Something goes wrong",
                "detais" => $exception
            ];
            return response($response, 500);
        }
    }

    public function indexAction()
    {
        try {
            $action = Action::all();
            return response()->json($action, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => "something goes wrong",
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function showAction($id)
    {
        try {
            $action = Action::findOrFail($id);
            return response()->json($action, 200);
        } catch (\Throwable $exception) {
            $response = [
                'message' => 'something goes wrong',
                'details' => $exception
            ];
            return response()->json($response, 500);
        }
    }

    public function destroyAction($id)
    {
        try {
            Action::findOrFail($id)->delete();
            $response = [
                'message' => 'The Action was deleted successfully'
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
