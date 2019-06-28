<?php

namespace App\Http\Controllers;

use App\ClientDetail;
use Illuminate\Http\Request;

class ClientDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = ClientDetail::orderBy('id','desc')->paginate(10);
        return view('Client.Clientlist',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Client.ClientCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            
            'client_name' => 'required',
            'client_contact' => 'required|digits:10',
            'client_email'=> 'required|email',
            'client_address' => 'required',

        ]);

        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        ClientDetail::create([
          
            'client_name' =>$request->client_name,
            'client_contact' =>$request->client_contact,
            'client_email' =>$request->client_email,
            'gst_no' =>$request->gst_no,
            'client_address' =>$request->client_address,
        ]);
        session()->flash('message','Client data has been added Successfully.');
        
        return redirect(route('client.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientDetail  $clientDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ClientDetail $client)
    {
        return view('Client.ClientShow',['client' =>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientDetail  $clientDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientDetail $client)
    {
        return view('Client.ClientEdit',['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientDetail  $clientDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientDetail $client)
    {
        
        $client->client_name = $request->client_name;
        $client->client_email = $request->client_email;
        $client->client_contact = $request->client_contact;
        $client->gst_no = $request->gst_no;
        $client->client_address = $request->client_address;
        $client->save();
        session()->flash('message','client data has been updated Successfully.');
        return redirect(route('client.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientDetail  $clientDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientDetail $client)
    {
        $client->delete();
        session()->flash('message','client data has been deleted Successfully.');
        return redirect(route('client.index'));
    }
}
