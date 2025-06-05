<?php

namespace App\Http\Controllers\Api\Transportation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Traits\Transportation\ApiTrait;

class AutocompleteController extends Controller
{
    use ApiTrait;

    public function index(Request $request){        
        $validator = Validator::make($request->all(), [
            'keyword' => 'required|min:3|max:75',
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'error' => [
                        'code' => 'required_params', 
                        'message' =>  $validator->errors()->all() 
                    ]
                ], 422);
        }
        
        $data = ApiTrait::autocomplete($request->keyword);
        return response()->json($data, 200);
    }
}