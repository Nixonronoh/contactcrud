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
        return redirect('/contacts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             Contact::create([
            'FirstName' =>$request->input('FirstName'),
            'LastName' =>$request->input('LastName'),
            'PhoneNumber' =>$request->input('PhoneNumber')
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
    dd($contact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        dd($contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        dd($contact);

        //$contact->delete();
        return redirect('/contacts');

    }
    public function search($FirstName)
    {
       return Contact::where('FirstName', 'like', '%' .$FirstName. '%' )->get();
         dd($FirstName);
       
    }
    }

