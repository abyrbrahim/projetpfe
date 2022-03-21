<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
            $clients=Client::where('deleted',null)->get();

            return view('clients.index')->with('clients', $clients);

    }
    public function create()
    {
        return view('clients.create');
    }
    public function store(ClientRequest $request) {

        Client::create([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone,

         ]);

         return redirect()->route('clients');
     }
     public function edit(Client $client)
     {

     return view('clients.edit')->with('client',$client);
     }
     public function update(ClientUpdateRequest $request)
     {
            Client::findorfail($request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

         return redirect()->route('clients');
     }
     public function delete($id)
     {
         $client =Client::findorfail($id)->update([
             'deleted'=>1
         ]);

         return redirect()->route('clients');
     }


}
