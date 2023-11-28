<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Contacts = Contact::all();
        
        return view('index',[
            'contacts'=>$Contacts
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = Contact::create([
            'FirstName' =>$request->input('FirstName'),
            'LastName' =>$request->input('LastName'),
            'PhoneNumber' =>$request->input('PhoneNumber')
        ]);
        print_r($contact);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    

    return view('contacts/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $contact = Contact::find($id);
            $contact->update($request->all());
            $response = [
                'success' => true,
                'message' => 'Resource updated!'
            ];
        }catch (Exception $exception){
            $response = [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }catch(Throwable $throwable){
            $response = [
                'success' => false,
                'message' => $throwable->getMessage()
            ];
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $contact= Contact::find($id);
            $contact->delete();
            $response = [
                'success' => true,
                'message' => 'Resource deleted!'
            ];
        }catch (Exception $exception){
            $response = [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }catch(Throwable $throwable){
            $response = [
                'success' => false,
                'message' => $throwable->getMessage()
            ];
        }
        return response()->json($response);
    }
    }
}
