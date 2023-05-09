<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Models\Room;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return response()->json(
            [
                'result' => $bookings,
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
    public function store(BookingRequest $request)
    {
        $booking = Booking::create(
            $request->all()
        );
        if ($booking) {
            $result = $booking;
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
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return response()->json(
            [
                'result' => $booking,
                'status' => 200,
            ],
            200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, Booking $booking)
    {
        if ($booking->update($request->all())) {
            $result = $booking;
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
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        if ($booking->delete()) {
            $result = $booking;
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
    public function checkAvailability(Request $request)
    {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $reserved = false;
        $bookings = Room::find($request->id)->bookings;
        foreach ($bookings as $booking) {
            if (($booking->startDate < $endDate && $booking->endDate > $endDate) || ($booking->startDate < $startDate && $booking->endDate > $startDate)) {
                $reserved = true;
                break;
            }
        }
        return response()->json(
            [
                'result' => $reserved,
            ]
        );
    }
}
