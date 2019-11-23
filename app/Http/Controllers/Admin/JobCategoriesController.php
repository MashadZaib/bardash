<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\JobCategory;
use Illuminate\Http\Request;
use Validator;

class JobCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job_categories = JobCategory::all();
        return view('admin.job-categories.index',compact('job_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'type' =>'error',
                'msg' => $validator->getMessageBag ()->toArray(),
            ]); 
        } else {
            $job_category = new JobCategory();
            $job_category->name = $request->name;
            $job_category->type = $request->type;
            $job_category->save();
            return response()->json(['type' =>'success', 'msg' => 'Job Category updated successfully!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_category = JobCategory::find($id);
        return view('admin.job-categories.edit',compact('job_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'type' =>'error',
                'msg' => $validator->getMessageBag ()->toArray(),
            ]);
        } else {
            $job_category = JobCategory::find($id);
            $job_category->name = $request->name;
            $job_category->type = $request->type;
            $job_category->save();
            return response()->json(['type' =>'success', 'msg' => 'Job Category added successfully!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
