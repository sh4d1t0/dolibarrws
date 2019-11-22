<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Vacations;
use Illuminate\Http\Request;

class VacationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacations = Vacations::all();

        return response()->json([
            'error' => false,
            'vacations'  => $vacations,
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
        if (Vacations::where('fk_user', $id)->exists()) {
            $vacations_user = Vacations::where('fk_user', $id)->get();

            return response()->json([
                'error' => false,
                'vacations_by_user' => $vacations_user,
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Vacations for current user does not exists',
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
