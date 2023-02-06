<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequests;
use App\Http\Requests\MedicineUpdateRequests;
use App\Models\Accounts;
use App\Models\Medicine;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicinesController extends Controller
{
    public function print(Medicine $medicine)
    {
        $getMedicine = $medicine->get();

        return view('partials.printTable', compact('getMedicine'));
    }

    public function store(MedicineRequests $medicineRequests, Medicine $medicine)
    {
        $requests = $medicineRequests->validated();
        $requests['reference_no'] = random_int(1000, 9999);

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(MedicineUpdateRequests $medicineUpdateRequests, Medicine $medicine, $id)
    {
        if ($medicineUpdateRequests->hasFile('image')) {
            File::delete(public_path() . 'images/' . $medicine->image);

            $destinationPath = 'public/image';
            $image = $medicineUpdateRequests->file('image');
            $imageName =  $image->getClientOriginalName();

            $medicineUpdateRequests->file('image')->storeAs($destinationPath, $imageName);

            $medicine->image = $imageName;

            $medicine->where('id', $id)->update($medicineUpdateRequests->validated() + ['image' => $imageName]);
        }

        $medicine->where('id', $id)->update($medicineUpdateRequests->validated());

        return to_route('users-index')->with('success', 'Medicine has been Updated Successfully!');
    }

    public function destroy($id)
    {
        //
    }
}
