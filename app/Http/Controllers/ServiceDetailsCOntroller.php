<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceDetailRequest;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailsCOntroller extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $serviceDetailsQuery = ServiceDetail::with('service');

        if (!empty($keyword)) {
            $serviceDetailsQuery->where('title', 'like', "%$keyword%");
        }

        $serviceDetails = $serviceDetailsQuery->paginate(5);

        return view('serviceDetails.index', compact('serviceDetails', 'keyword'));
    }

    public function create(){
        $services = Service::all();
        return view('serviceDetails.create',compact('services'));
    }

    public function store(StoreServiceDetailRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'f1_image', 'f2_image', 'f3_image', 'f4_image', 'f5_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/serviceDetails');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the ServiceDetail model instance with the validated data
        ServiceDetail::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('ServiceDetails.index')->with('success', 'ServiceDetail created successfully.');
    }


    public function edit(ServiceDetail $serviceDetails){
        $services = Service::all();

        return view('serviceDetails.edit',compact('serviceDetails','services'));
    }

    public function update(ServiceDetail $serviceDetails, StoreServiceDetailRequest $request)
    {
        $serviceDetailsData = $request->validated();

        // Handle image uploads
//        $imageFields = ['image', 'f1_image', 'f2_image', 'f3_image', 'f4_image', 'f5_image'];
        $imageFields = ['image', 'founded_image', 'g_success_image', 'founded_data_office_image', 'international_award_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/serviceDetails');
                $serviceDetailsData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $serviceDetails->update($serviceDetailsData);

        return redirect()->route('ServiceDetails.index')->with('success', 'ServiceDetail item successfully updated');
    }


    public function delete(ServiceDetail $serviceDetails){
        $serviceDetails->delete();
        return redirect()->route('ServiceDetails.index')->with('error','Successfully  serviceDetails items deleted');

    }
    public function duplicate(ServiceDetail $serviceDetails){
        $productDuplicate=$serviceDetails->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
