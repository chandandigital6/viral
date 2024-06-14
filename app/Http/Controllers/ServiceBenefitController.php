<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceBenefitsRequest;
use App\Models\Service;
use App\Models\ServiceBenefit;
use Illuminate\Http\Request;

class ServiceBenefitController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $serviceBenefits = ServiceBenefit::with('service');

        if (!empty($keyword)) {
            $serviceBenefits->where('title', 'like', "%$keyword%");
        }

        $serviceBenefitsData = $serviceBenefits->paginate(5);

        return view('serviceBenefit.index', compact('serviceBenefitsData'));
    }

    public function create(){
        $services = Service::all();
        return view('serviceBenefit.create',compact('services'));
    }

    public function store(ServiceBenefitsRequest $request){
//        dd($request);
        $serviceBenefit=ServiceBenefit::create($request->all());
        if ($request->hasFile('image')){
            $image = $request->file('image')->store('public/serviceBenefit');
            $serviceBenefit->image = str_replace('public/', '', $image);
            $serviceBenefit->save();
        }

        return redirect()->route('serviceBenefits.index')->with('success', 'ServiceBenefit  created successfully.');
    }

    public function edit(ServiceBenefit $serviceBenefits){
        $services = Service::all();
        return view('serviceBenefit.edit',compact('serviceBenefits','services'));
    }

    public function update(ServiceBenefit $serviceBenefits , ServiceBenefitsRequest $request){
//        dd($request);
        $serviceBenefitData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/serviceBenefit');
            $serviceBenefitData['image'] = str_replace('public/', '', $imagePath);
        }

        $serviceBenefits->update($serviceBenefitData);

        return redirect()->route('serviceBenefits.index')->with('success', 'serviceBenefit item successfully updated');
    }


    public function delete(ServiceBenefit $serviceBenefits){
        $serviceBenefits->delete();
        return redirect()->route('serviceBenefits.index')->with('error','Successfully  serviceBenefit items deleted');

    }
    public function duplicate(ServiceBenefit $serviceBenefits){
        $productDuplicate=$serviceBenefits->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
