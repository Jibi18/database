<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studies=studentmodel::all();
        return view('viewallstudent',compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }
    public function create2()
    {
        return view('searchstudent');
    }
    public function search(Request $request)
    {
        $getSname=request('sname');
        $studies=studentmodel::query()->where('sname','LIKE',"%{$getSname}%")->get();
        return view('viewallstudent',compact('studies'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('sname');
        $getadm=request('sno');
        $getcol=request('scol');
        $getcon=request('scon');
        echo $getname;
        echo "<br>";
        echo $getadm;
        echo "<br>";
        echo $getcol;
        echo "<br>";
        echo $getcon;
        echo "<br>";
        $student=new studentmodel();
        $student->sname=$getname;
        $student->sadmno=$getadm;
        $student->scollege=$getcol;
        $student->scontactno=$getcon;
        $student->save();
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
