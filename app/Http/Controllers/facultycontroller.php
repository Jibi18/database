<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facultymodel;

class facultycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faculties=facultymodel::all();
        return view('viewallfaculties',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    public function search(Request $request)
    {
        $getFname=request('fname');
        $faculties=facultymodel::query()->where('fname','LIKE',"%{$getFname}%")->get();
        return view('viewallfaculties',compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request('fname');
        $getdes=request('fdes');
        $getcol=request('fcol');
        $getcon=request('fcon');
        echo $getname;
        echo "<br>";
        echo $getdes;
        echo "<br>";
        echo $getcol;
        echo "<br>";
        echo $getcon;
        echo "<br>";
        $faculty=new facultymodel();
        $faculty->fname=$getname;
        $faculty->fdesignation=$getdes;
        $faculty->fcollege=$getcol;
        $faculty->fcontactno=$getcon;
        $faculty->save();
        return redirect('/viewallfaculties');

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
        $faculties=facultymodel::find($id);
        return view('editview',compact('faculties'));
        
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
        $faculty=facultymodel::find($id);
        $getname=request('fname');
        $getdes=request('fdes');
        $getcol=request('fcol');
        $getcon=request('fcon');
        
        $faculty->fname=$getname;
        $faculty->fdesignation=$getdes;
        $faculty->fcollege=$getcol;
        $faculty->fcontactno=$getcon;
        $faculty->save();
        return redirect('/viewallfaculties');
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
