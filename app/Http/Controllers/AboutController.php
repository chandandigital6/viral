<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $about = About::query();

        if (!empty($keyword)) {
            $about->where('title', 'like', "%$keyword%");
        }
        $aboutData = $about->paginate(5);

        return view('about.index',compact('aboutData'));
    }

    public function create(){
        return view('about.create');
    }

    public function store(AboutRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'founded_image', 'g_success_image', 'founded_data_office_image', 'international_award_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/about');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the About model instance with the validated data
        About::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('about.index')->with('success', 'About created successfully.');
    }


    public function edit(About $about){

        return view('about.edit',compact('about'));
    }

    public function update(About $about, AboutRequest $request)
    {
        $aboutData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'founded_image', 'g_success_image', 'founded_data_office_image', 'international_award_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/about');
                $aboutData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $about->update($aboutData);

        return redirect()->route('about.index')->with('success', 'About item successfully updated');
    }


    public function delete(About $about){
        $about->delete();
        return redirect()->route('about.index')->with('error','Successfully  about items deleted');

    }
    public function duplicate(About $about){
        $productDuplicate=$about->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
