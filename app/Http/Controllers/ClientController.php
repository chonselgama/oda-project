<?php

namespace App\Http\Controllers;

use App\Models\ApiClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date_de_naissance' => 'required|date',
            'lieu_de_naissance' => 'required|string'
        ]);

        $data = $request->all();

        $client = ApiClient::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'date_de_naissance' => $data['date_de_naissance'],
            'lieu_de_naissance' => $data['lieu_de_naissance']
        ]);
        return response()->json($client,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiClient  $apiClient
     * @return \Illuminate\Http\Response
     */
    public function show(ApiClient $apiClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiClient  $apiClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiClient $apiClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiClient  $apiClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiClient $apiClient)
    {
        //
    }
}
