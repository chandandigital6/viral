<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientLogoRequest;
use App\Models\ClientLogo;
use Illuminate\Http\Request;

class ClientLogoController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $logo = ClientLogo::query();

        if (!empty($keyword)) {
            $logo->where('title', 'like', "%$keyword%");
        }
        $logoData = $logo->paginate(5);

        return view('logo.index',compact('logoData'));
    }

    public function create(){
        return view('logo.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image.*' => 'nullable|image',
            'title' => 'required|string|max:255',
            'msg' => 'nullable|string|max:255',
//            'category_id' => 'required|exists:categories,id',
            // Use 'images.*' instead of 'image_path.*' for multiple images
            // Add validation rules for other fields if needed
        ]);

        $logo = new ClientLogo();
        $logo->title = $validatedData['title'];
        $logo->msg=$validatedData['msg'];
//        $logo->category_id = $validatedData['category_id'];

        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/logo');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }
            // Convert the array of image paths to a string
            $logo->image = implode(',', $imagePaths);
        }

        $logo->save();

        return redirect()->route('logo.index')->with('success', 'logo created successfully.');
    }






    public function edit(ClientLogo $logo){

        return view('logo.edit',compact('logo'));
    }

    public function update(Request $request, $logo)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'image.*' => 'nullable|image',
            'title' => 'required|string|max:255',
            'msg' => 'nullable|string|max:255',
            // Add validation rules for other fields if needed
        ]);

        // Find the logo by its ID
        $logo = ClientLogo::findOrFail($logo);

        // Update the logo's title and message
        $logo->title = $validatedData['title'];
        $logo->msg = $validatedData['msg'];

        // Handle the image upload if there are new images
        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePath = $image->store('public/logo');
                $imagePaths[] = str_replace('public/', '', $imagePath);
            }

            // If the logo already has images, merge the new ones with the existing ones
            if (is_string($logo->image) && !empty($logo->image)) {
                $existingImages = explode(',', $logo->image);
                $allImages = array_merge($existingImages, $imagePaths);
            } else {
                $allImages = $imagePaths;
            }

            // Convert the array of image paths to a string
            $logo->image = implode(',', $allImages);
        }

        // Save the updated logo
        $logo->save();

        // Redirect to the logo index page with a success message
        return redirect()->route('logo.index')->with('success', 'Logo updated successfully.');
    }

    public function delete(ClientLogo $logo){
        $logo->delete();
        return redirect()->route('logo.index')->with('error','Successfully  logo items deleted');

    }
    public function duplicate(ClientLogo $logo){
        $productDuplicate=$logo->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
