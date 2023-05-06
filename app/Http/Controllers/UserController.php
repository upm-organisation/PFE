<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserResquest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json(
            [
                'result' => $users,
            ],
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserResquest $request)
    {
        $email = $request->name . '.' . $request->lastName . '@hotel.com';
        $password = Hash::make($request->name . '.' . $request->LastName);
        $request->merge([
            'email' => $email,
            'password' => $password,
        ]);
        $user = User::create(
            $request->all()
        );
        if ($user) {
            $result = $user;
            $status = 200;
        } else {
            $result = null;
            $status = 500;
        }
        return response()->json(
            [
                'result' => $result,
                'status' => $status,
            ],
            $status
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(
            [
                'result' => $user,
                'status' => 200,
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserResquest $request, User $user)
    {
        if ($user->update($request->all())) {
            $result = $user;
            $status = 200;
        } else {
            $result = null;
            $status = 500;
        }
        return response()->json(
            [
                'result' => $result,
                'status' => $status,
            ],
            $status
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            $result = $user;
            $status = 200;
        } else {
            $result = null;
            $status = 500;
        }
        return response()->json(
            [
                'result' => $result,
                'status' => $status,
            ],
            $status
        );
    }
}
