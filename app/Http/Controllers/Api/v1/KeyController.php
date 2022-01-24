<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Key;
use Illuminate\Http\Request;
use App\Http\Requests\KeyStoreRequest;
use App\Http\Resources\KeyResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return KeyResource::collection(Key::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeyStoreRequest $request, )
    {
        $connection = Key::create($request->validated());

        return new KeyResource($connection);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new KeyResource(Key::findOrFail($id));
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
    public function destroy($user_id, $station_id)
    {
        $user = User::findOrFail($user_id);
        $user->stations()->detach($station_id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}