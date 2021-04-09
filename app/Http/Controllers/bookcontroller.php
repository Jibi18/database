<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books=bookmodel::all();
        return view('viewallbook',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getbooktitle=request('btitle');
        $getbookaut=request('baut');
        $getbookdes=request('bdes');
        $getbookdis=request('bdis');
        $getbookprice=request('bpri');
        echo $getbooktitle;
        echo "<br>";
        echo $getbookaut;
        echo "<br>";
        echo $getbookdes;
        echo "<br>";
        echo $getbookdis;
        echo "<br>";
        echo $getbookprice;
        echo "<br>";
        $book=new bookmodel();
        $book->btitle=$getbooktitle;
        $book->bauthor=$getbookaut;
        $book->bdescription=$getbookdes;
        $book->bdistributor=$getbookdis;
        $book->bprice=$getbookprice;
        $book->save();
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
