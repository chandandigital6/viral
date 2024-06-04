<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChozeRequest;
use App\Models\choze;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $choose = choze::query();

        if (!empty($keyword)) {
            $choose->where('title', 'like', "%$keyword%");
        }
        $chooseData = $choose->paginate(5);

        return view('chose.index',compact('chooseData'));
    }

    public function create(){
        return view('chose.create');
    }

    public function store(ChozeRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/chozes');
            $validatedData['image'] = str_replace('public/', '', $imagePath);
        }

        Choze::create($validatedData);

        // Create the choze model instance with the validated data
        choze::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('choose.index')->with('success', 'choze created successfully.');
    }


    public function edit(choze $choose){

        return view('chose.edit',compact('choose'));
    }

    public function update(choze $choose, ChozeRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/chozes');
            $validatedData['image'] = str_replace('public/', '', $imagePath);
        }

        $choose->update($validatedData);

        return redirect()->route('choose.index')->with('success', 'choze item successfully updated');
    }


    public function delete(choze $choose){
        $choose->delete();
        return redirect()->route('choose.index')->with('error','Successfully  chose items deleted');

    }
    public function duplicate(choze $choose){
        $productDuplicate=$choose->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
