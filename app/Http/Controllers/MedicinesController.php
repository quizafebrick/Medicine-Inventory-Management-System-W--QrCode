<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequests;
use App\Http\Requests\MedicineUpdateRequests;
use App\Models\Medicine;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function update(MedicineUpdateRequests $medicineUpdateRequests, Medicine $medicine, $id)
    {
        $medicine->find($id);

        $requests = $medicineUpdateRequests->validated();

        if ($medicineUpdateRequests->hasFile('image')) {
            $destinationPath = 'storage/image'.$medicine->image;

            if (File::exists($destinationPath)) {
                File::delete($destinationPath);
            }

            $updateImage = $medicineUpdateRequests->file('image');
            $destinationPath2 = 'public/image';
            $imageName = $updateImage->getClientOriginalName();
            $updateImage->file('image')->storeAs($destinationPath2, $imageName);

            $requests['image'] = $imageName;
        }

        $medicine->update($requests);

        return to_route('users-index')->with('success', 'Medicine has been Saved Successfully!');

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
