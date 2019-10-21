<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\LastLogin;
use Illuminate\Http\Request;

class LastLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = LastLogin::all();

        return response()->json([
            'error' => false,
            'last_login'  => $login,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (LastLogin::where('rowid', $id)->exists()) {
            $login = LastLogin::where('rowid', $id)->get();

            return response()->json([
                'error' => false,
                'last_login' => $login,
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Last login access for current user does not exists',
            ], 404);
        }
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
