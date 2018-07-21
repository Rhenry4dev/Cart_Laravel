<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Requests\Api\UserRequestAPI;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Auth;
use App\Transformers\UserTransformer;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{

    public function index()
    {

        $user = User::all();

        return $this->response->collection($user, new UserTransformer);
    }

    public function show($id)
    {

        $user = User::find($id);

        return $this->response->item($user, new UserTransformer);
    }

    public function store(UserRequestAPI $request)
    {

        $password = Hash::make($request->password);
        $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password
                ];
        $user = User::create($data);

        return response()->json($user, 201);
    }


    public function update(UserRequestAPI $request, $id)
    {

        $user = User::findOrFail($id);
        $password = Hash::make($request->password);
        $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password
                ];
        $user->update($data);

        return $user;
    }

    public function destroy(UserRequestAPI $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return;
    }
}
