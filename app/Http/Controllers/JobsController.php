<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $jobs = Job::query();

        if (!empty($keyword)) {
            $jobs->where('title', 'like', "%$keyword%");
        }
        $jobsData = $jobs->paginate(5);

        return view('jobs.index',compact('jobsData'));
    }

    public function create(){
        return view('jobs.create');
    }

    public function store(JobsRequest $request){
        $jobs=Job::create($request->all());
        $image = $request->file('image')->store('public/jobs');

        $jobs->image = str_replace('public/', '', $image);
        $jobs->save();
        return redirect()->route('jobs.index')->with('success', 'Job  created successfully.');
    }

    public function edit(Job $jobs){

        return view('jobs.edit',compact('jobs'));
    }

    public function update(Job $jobs , JobsRequest $request){
        $jobsData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/jobs');
            $jobsData['image'] = str_replace('public/', '', $imagePath);
        }

        $jobs->update($jobsData);

        return redirect()->route('jobs.index')->with('success', 'jobs item successfully updated');
    }


    public function delete(Job $jobs){
        $jobs->delete();
        return redirect()->route('jobs.index')->with('error','Successfully  jobs items deleted');

    }
    public function duplicate(Job $jobs){
        $productDuplicate=$jobs->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
