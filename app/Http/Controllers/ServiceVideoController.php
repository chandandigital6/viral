<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceVidioRequest;
use App\Http\Requests\StoreServiceDetailRequest;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\ServiceVideo;
use Illuminate\Http\Request;

class ServiceVideoController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $serviceVideos = ServiceVideo::with('service');

        if (!empty($keyword)) {
            $serviceVideos->where('title', 'like', "%$keyword%");
        }

        $serviceVideos = $serviceVideos->paginate(5);

        return view('serviceVideo.index', compact('serviceVideos', 'keyword'));
    }

    public function create(){
        $services = Service::all();
        return view('serviceVideo.create',compact('services'));
    }

    public function store(ServiceVidioRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/serviceVideo');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the ServiceVideo model instance with the validated data
        ServiceVideo::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('serviceVideo.index')->with('success', 'ServiceVideo created successfully.');
    }


    public function edit(ServiceVideo $serviceVideo){
        $services = Service::all();

        return view('serviceVideo.edit',compact('serviceVideo','services'));
    }

    public function update(ServiceVideo $serviceVideo, ServiceVidioRequest $request)
    {
        $serviceVideoData = $request->validated();

        // Handle image uploads
//        $imageFields = ['image', 'f1_image', 'f2_image', 'f3_image', 'f4_image', 'f5_image'];
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/serviceVideo');
                $serviceVideoData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $serviceVideo->update($serviceVideoData);

        return redirect()->route('serviceVideo.index')->with('success', 'ServiceVideo item successfully updated');
    }


    public function delete(ServiceVideo $serviceVideo){
        $serviceVideo->delete();
        return redirect()->route('serviceVideo.index')->with('error','Successfully  serviceVideo items deleted');

    }
    public function duplicate(ServiceVideo $serviceVideo){
        $productDuplicate=$serviceVideo->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
