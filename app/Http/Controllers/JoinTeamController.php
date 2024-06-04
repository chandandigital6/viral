<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinRequest;
use App\Models\join;
use Illuminate\Http\Request;

class JoinTeamController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $joins = join::query();

        if (!empty($keyword)) {
            $joins->where('title', 'like', "%$keyword%");
        }
        $joinsData = $joins->paginate(5);

        return view('joins.index',compact('joinsData'));
    }

    public function create(){
        return view('joins.create');
    }

    public function store(JoinRequest $request)
    {
        // Validate the request data
        $validatedData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'join_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/joins');
                // Save the image path without 'public/' prefix
                $validatedData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        // Create the join model instance with the validated data
        join::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('joins.index')->with('success', 'join created successfully.');
    }


    public function edit(join $joins){

        return view('joins.edit',compact('joins'));
    }

    public function update(join $joins, JoinRequest $request)
    {
        $joinsData = $request->validated();

        // Handle image uploads
        $imageFields = ['image', 'join_image'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $imagePath = $request->file($field)->store('public/joins');
                $joinsData[$field] = str_replace('public/', '', $imagePath);
            }
        }

        $joins->update($joinsData);

        return redirect()->route('joins.index')->with('success', 'join item successfully updated');
    }


    public function delete(join $joins){
        $joins->delete();
        return redirect()->route('joins.index')->with('error','Successfully  joins items deleted');

    }
    public function duplicate(join $joins){
        $productDuplicate=$joins->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
