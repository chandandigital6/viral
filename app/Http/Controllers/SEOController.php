<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeoRequest;
use App\Models\SEO;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    public function index(){
        $seoes = SEO::all();
        return view('seo.index', compact('seoes'));
    }

    public function create(){
        return view('seo.create');
    }

    public function store(SeoRequest $request){
//        $request->validate([
//            'name' => '',
//            'property' => '',
//            'content' => 'required',
//            'page' => 'required',
//        ]);

        SEO::create($request->all());
        return redirect('seo')->with('success', 'SEO created successfully');
    }

    public function edit(SEO $seo){
        return view('seo.edit', compact('seo'));
    }

    public function update(SeoRequest $request, SEO $seo){
//        $request->validate([
//            'name' => '',
//            'property' => '',
//            'content' => 'required',
//            'page' => 'required',
//        ]);

        $seo->update($request->all());
        return redirect('seo')->with('success', 'SEO Update successfully');
    }

    public function delete(SEO $seo){
        $seo->delete();
        return back()->with('success', 'SEO Deleted successfully');
    }
}
