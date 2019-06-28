<?php

namespace App\Http\Controllers;

use App\LeaveMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        LeaveMessage::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'Contact' => $request->contact,
                    'companyName' => $request->CompanyName,
                    'YourMessage' => $request->message,    
                ]);
                
                return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
