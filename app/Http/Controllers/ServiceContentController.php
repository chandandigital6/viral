<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceContentRequest;
use App\Models\Service;
use App\Models\ServiceContent;
use Illuminate\Http\Request;

class ServiceContentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $serviceContent = ServiceContent::with('service');

        if (!empty($keyword)) {
            $serviceContent->where('title', 'like', "%$keyword%");
        }

        $serviceContentData = $serviceContent->paginate(5);

        return view('serviceContent.index', compact('serviceContentData'));
    }

    public function create(){
        $services = Service::all();
        return view('serviceContent.create',compact('services'));
    }

    public function store(ServiceContentRequest $request){
//        dd($request);
        $serviceContent=ServiceContent::create($request->all());
//        if ($request->hasFile('image')){
//            $image = $request->file('image')->store('public/serviceContent');
//            $serviceContent->image = str_replace('public/', '', $image);
//            $serviceContent->save();
//        }

        return redirect()->route('serviceContent.index')->with('success', 'ServiceContent  created successfully.');
    }

    public function edit(ServiceContent $serviceContent){
        $services = Service::all();
        return view('serviceContent.edit',compact('serviceContent','services'));
    }

    public function update(ServiceContent $serviceContent , ServiceContentRequest $request){
//        dd($request);
        $serviceContentData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/serviceContent');
//            $serviceContentData['image'] = str_replace('public/', '', $imagePath);
//        }

        $serviceContent->update($serviceContentData);

        return redirect()->route('serviceContent.index')->with('success', 'serviceContent item successfully updated');
    }


    public function delete(ServiceContent $serviceContent){
        $serviceContent->delete();
        return redirect()->route('serviceContent.index')->with('error','Successfully  serviceContent items deleted');

    }
    public function duplicate(ServiceContent $serviceContent){
        $productDuplicate=$serviceContent->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
