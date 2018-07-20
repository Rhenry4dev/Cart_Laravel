<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Requests\Api\UserRequestAPI;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Auth;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserResource;


class UserController extends \App\Http\Controllers\Controller
{

    public function index(User $user)
    {

        $user = User::all();
        UserCollection::withoutWrapping();
        return new UserCollection($user);
            
    }

    public function show($id)
    {
        $user = User::find($id);
        UserCollection::withoutWrapping();
        return new UserResource($user);
            
    }

    public function store(UserRequestAPI $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }


    public function update(UserRequestAPI $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return $user;
    }

    public function destroy(UserRequestAPI $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return;
    }
}
