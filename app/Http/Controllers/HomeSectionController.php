<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $homeContent = HomeSection::query('');

        if (!empty($keyword)) {
            $homeContent->where('title', 'like', "%$keyword%");
        }

        $homeContentData = $homeContent->paginate(5);

        return view('homeContent.index', compact('homeContentData'));
    }

    public function create(){

        return view('homeContent.create');
    }

    public function store(HomeSectionRequest $request){
//        dd($request);
        $homeContent=HomeSection::create($request->all());
//        if ($request->hasFile('image')){
//            $image = $request->file('image')->store('public/homeContent');
//            $homeContent->image = str_replace('public/', '', $image);
//            $homeContent->save();
//        }

        return redirect()->route('homeContent.index')->with('success', 'HomeSection  created successfully.');
    }

    public function edit(HomeSection $homeContent){

        return view('homeContent.edit',compact('homeContent'));
    }

    public function update(HomeSection $homeContent , HomeSectionRequest $request){
//        dd($request);
        $homeContentData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/homeContent');
//            $homeContentData['image'] = str_replace('public/', '', $imagePath);
//        }

        $homeContent->update($homeContentData);

        return redirect()->route('homeContent.index')->with('success', 'homeContent item successfully updated');
    }


    public function delete(HomeSection $homeContent){
        $homeContent->delete();
        return redirect()->route('homeContent.index')->with('error','Successfully  homeContent items deleted');

    }
    public function duplicate(HomeSection $homeContent){
        $productDuplicate=$homeContent->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
