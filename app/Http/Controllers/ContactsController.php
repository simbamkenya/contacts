<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contacts = Contact::OrderBy('id', 'asc')->get();    
        return view('pages.index')->with("contacts", $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'phoneno'=>'required'

        ]);


        //create contact

        $contact = new Contact;
        $contact ->firstname = $request->input('firstname');
        $contact ->lastname = $request->input('lastname');
        $contact ->phoneno = $request->input('phoneno');
        $contact ->save();

        return redirect('/contacts')->with('success', 'Contact created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::Find($id);
        return view('pages.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('pages.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstname'=> 'required',
            'lastname'=> 'required',
            'phoneno'=>'required'

        ]);


        //find contact

        $contact = Contact::find($id);
        $contact ->firstname = $request->input('firstname');
        $contact ->lastname = $request->input('lastname');
        $contact ->phoneno = $request->input('phoneno');
        $contact ->save();

        return redirect('/contacts')->with('success', 'Contact updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact =Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success','Contact Removed');
    }
}
