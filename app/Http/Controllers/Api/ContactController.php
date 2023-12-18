<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;

use function Laravel\Prompts\error;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        if ($contacts->count() > 0){
            return response()->json([
                'status' => 200,
                'contacts'=> $contacts
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message'=> 'No info was found '
            ],404);
        }
        
    }


   public function store(Request $request)
{
    $validator = Validator::make($request->all(),[
'FirstName' => 'required',
'LastName' => 'required',
'PhoneNumber' => 'required',

    ]);
    if($validator->fails()){
        return response()->json([
            'status'=>422,
            'errors'=> $validator->messages()
        ],422);
    }else{
        $contact = Contact::create([
            'FirstName'=> $request->FirstName,
            'LastName'=> $request->FirstName,
            'PhoneNumber'=> $request->FirstName,
        ]);
        if($contact){
            return response()->json([
                'status'=>200,
                'message'=>'contact created successfully'
            ],200);
        }else{
            return response()->json([
                'status'=>500,
                'message'=>'server down'
            ],500);
        }
    }
}
public function search($FirstName){
    Contact::where ('FirstName', 'like','%'.$FirstName.'%')->get();
    dd($FirstName);
}
}