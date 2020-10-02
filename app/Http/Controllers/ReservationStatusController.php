<?php

namespace App\Http\Controllers;

use App\ReservationStatus;
use Illuminate\Http\Request;

class ReservationStatusController extends Controller
{
   	public function index()
   	{
   		$ReservationStatus = ReservationStatus::all();
   		return view('reservation.index', compact('ReservationStatus'));
   	}

   	public function show(ReservationStatus $ReservationStatus)
   	{
		return view('reservation.show', compact('ReservationStatus'));
   	}

   	public function create()
   	{
   		return view('reservation.create');
   	}

   	public function store()
   	{
   		$validated_fields = request()->validate([
   			'status' => 'required',
   			'description' => 'required'
   		]);
   		
   		$reservationStatus = ReservationStatus::create($validated_fields);
   		
   		return redirect('/');

   	}

   	public function edit(ReservationStatus $ReservationStatus)
   	{
   		return view('reservation.edit', compact('ReservationStatus'));
   	}

   	public function update(ReservationStatus $ReservationStatus)
   	{
   		$ReservationStatus->status = request()->status;
   		$ReservationStatus->description = request()->description;
   		$ReservationStatus->save();
   		return redirect('/ReservationStatus/'.$ReservationStatus->id);
   	}

   	public function destroy(ReservationStatus $ReservationStatus)
   	{
   		$ReservationStatus->delete();
   		return redirect('/');
   	}
}
