<?php

namespace App\Http\Controllers\API;

use App\HolidayHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HolidayHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hhistory = HolidayHistory::all();

        return response()->json([
            'error' => false,
            'holiday_history'  => $hhistory,
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
        if (HolidayHistory::where('fk_user', $id)->exists()) {
            $hh_user = HolidayHistory::where('fk_user', $id)->get();

            return response()->json([
                'error' => false,
                'holiday_history_by_user' => $hh_user,
            ], 200);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Vacations history for current user does not exists',
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
