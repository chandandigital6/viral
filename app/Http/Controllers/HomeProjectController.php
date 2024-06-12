<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeProjectRequest;
use App\Models\HomeProject;
use Illuminate\Http\Request;

class HomeProjectController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $homeProject = HomeProject::query();

        if (!empty($keyword)) {
            $homeProject->where('title', 'like', "%$keyword%");
        }
        $homeProjectData = $homeProject->paginate(5);

        return view('homeProject.index',compact('homeProjectData'));
    }

    public function create(){
        return view('homeProject.create');
    }

    public function store(HomeProjectRequest $request)
    {
//        dd($request);
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/homeProject');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the HomeProject model instance with the validated data
        HomeProject::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('homeProject.index')->with('success', 'HomeProject created successfully.');
    }


    public function edit(HomeProject $homeProject){

        return view('homeProject.edit',compact('homeProject'));
    }

    public function update(HomeProject $homeProject, HomeProjectRequest $request)
    {
        $homeProjectData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'founded_image', 'g_success_image', 'founded_data_office_image', 'international_award_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/homeProject');
                $homeProjectData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $homeProject->update($homeProjectData);

        return redirect()->route('homeProject.index')->with('success', 'HomeProject item successfully updated');
    }


    public function delete(HomeProject $homeProject){
        $homeProject->delete();
        return redirect()->route('homeProject.index')->with('error','Successfully  homeProject items deleted');

    }
    public function duplicate(HomeProject $homeProject){
        $productDuplicate=$homeProject->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
