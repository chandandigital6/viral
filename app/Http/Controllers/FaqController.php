<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\Service;
use App\Models\ServiceBenefit;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $faq = Faq::with('service');

        if (!empty($keyword)) {
            $faq->where('title', 'like', "%$keyword%");
        }

        $faqData = $faq->paginate(5);

        return view('faq.index',compact('faqData'));
    }

    public function create(){
        $services = Service::all();
        return view('faq.create',compact('services'));
    }

    public function store(FaqRequest $request){
//        dd($request);
        $faq=Faq::create($request->all());
//        $image = $request->file('image')->store('public/faq');
//
//        $faq->image = str_replace('public/', '', $image);
//        $faq->save();
        return redirect()->route('faq.index')->with('success', 'Faq  created successfully.');
    }

    public function edit(Faq $faq){
        $services = Service::all();
        return view('faq.edit',compact('faq','services'));
    }

    public function update(Faq $faq , FaqRequest $request){
        $faqData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/faq');
//            $faqData['image'] = str_replace('public/', '', $imagePath);
//        }

        $faq->update($faqData);

        return redirect()->route('faq.index')->with('success', 'faq item successfully updated');
    }


    public function delete(Faq $faq){
        $faq->delete();
        return redirect()->route('faq.index')->with('error','Successfully  faq items deleted');

    }
    public function duplicate(Faq $faq){
        $productDuplicate=$faq->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
