<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequests;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicineRequests $medicineRequests, Medicine $medicine)
    {
        $requests = $medicineRequests->validated();

        if ($medicineRequests->hasFile('image')) {
            $destinationPath = 'public/image';
            $image = $medicineRequests->file('image');
            $imageName =  $image->getClientOriginalName();

            $medicineRequests->file('image')->storeAs($destinationPath, $imageName);

            $requests['image'] = $imageName;
        }

        $medicine->create($requests);
        // dd($requests);

        return redirect()->back()->with('success', 'Medicine has been Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
