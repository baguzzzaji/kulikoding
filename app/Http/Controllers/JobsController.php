<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\JobFormRequest;
use App\Job;
use App\Category;
use Carbon\Carbon;
class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('category')->get();
        return view('jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobFormRequest $request)
    {
        $job = new Job(array(
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'office' => $request->get('office'),
            'description' => $request->get('description'),
            'howtoapply' => $request->get('howtoapply'),
            'companyname' => $request->get('companyname'),
            'companyurl' => $request->get('companyurl'),
            'companyemail' => $request->get('companyemail'),
            'isactive' => true,
            'activeuntil' => Carbon::now()->addMonth(1)
        ));
        $job->save();
        return redirect('/submit')->with('status', 'Pemasukkan data berhasil! Silahkan cek email anda untuk informasi lebih lanjut!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
