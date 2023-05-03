<?php

namespace App\Http\Controllers;

use App\Models\Accessorie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AccessorieRequest;

class AccessorieController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccessorieRequest $request)
    {
        $accessorie = Accessorie::create(
            $request->all()
        );
        if ($accessorie) {
            $result = $accessorie;
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
     * @param  \App\Models\Accessorie  $accessorie
     * @return \Illuminate\Http\Response
     */
    public function show(Accessorie $accessorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accessorie  $accessorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessorie $accessorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accessorie  $accessorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessorie $accessorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accessorie  $accessorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessorie $accessorie)
    {
        //
    }
}
