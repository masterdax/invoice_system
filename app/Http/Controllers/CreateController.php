<?php

namespace App\Http\Controllers;
use App\LeaveMessage;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Navigation.MainFooter');
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

                    'name' => 'required|min:3',
                    'email' => 'required|email',
                    'contact' =>'digits:10'
                ]);

                
                
                LeaveMessage::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'Contact' => $request->contact,
                    'companyName' => $request->CompanyName,
                    'YourMessage' => $request->message,    
                ]);
                session()->flash('message','Client data has been added Successfully.');
                return redirect(route('index'));
                //echo $request->name;
                //echo $request->email;
                //echo $request->contact;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
