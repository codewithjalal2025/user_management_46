<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactValidate;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $contacts =User::join('contacts','contacts.user_id','users.id')
        ->where('user_id',Auth::id())
        ->paginate(4);
        $search =$request->input('search',null);
        if ($search) {

            $contacts =Contact::where('first_name','like','%'.$search.'%')
            ->orWhere('last_name','like','%'.$search.'%')
            ->orWhere('phone','like','%'.$search.'%')
            ->where('user_id',Auth::id())
            ->paginate(2);
        }


        return view('contact.list',compact('contacts','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactValidate $request)
    {
        $contact =new Contact();
        $contact->user_id=Auth::id();
        $contact->first_name=$request->first_name;
        $contact->last_name=$request->last_name;
        $contact->phone=$request->phone;
        $contact->save();

        return redirect('contact/list')->with('success','Contact Successfully Created');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts=Contact::find($id);
        return view('contact.show',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact=Contact::find($id);
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact =Contact::find($id);
        $contact->user_id=Auth::id();
        $contact->first_name=$request->first_name;
        $contact->last_name=$request->last_name;
        $contact->phone=$request->phone;
        $contact->save();

        return redirect('contact/list')->with('success','Contact Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact =Contact::find($id);
        $contact->delete();

        return redirect('contact/list')->with('success','Contact Successfully Deleted');
    }
}
