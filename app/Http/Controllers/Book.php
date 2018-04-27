<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data_book'] = \App\M_BookStore::join('category_books','category_books.category_id' , '=' , 'book_stores.category_id')->get();
        return view('dashboard.listBook', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['data_category'] = \App\M_CategoryBook::all();
        return view('dashboard.addbook' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\M_BookStore();
        $data->category_id = $request->b_catalog;
        $data->book_name = $request->b_name;
        $data->description = $request->b_deskrip;
        $data->price = $request->b_price;
        $data->total_stuff = $request->b_total_stuff;
        $data->save();
        return redirect()->route('bookStore.index')->with('alert-success','Success Add book');
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
        $data['data_book'] = \App\M_BookStore::join('category_books','category_books.category_id' , '=' , 'book_stores.category_id')
        ->where('book_id' , $id)->get();
        $data['data_catalog'] = \App\M_CategoryBook::all();
        return view('dashboard.editBook', $data);
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
        $data = \App\M_BookStore::where('book_id' , $id)->first();
        $data->category_id = $request->b_catalog;
        $data->book_name = $request->b_name;
        $data->description = $request->b_deskrip;
        $data->price = $request->b_price;
        $data->total_stuff = $request->b_total_stuff;
        $data->save();
        return redirect()->route('bookStore.edit' , $id)->with('alert-success','Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\M_BookStore::findOrFail($id);
        $data->delete();
        return redirect('/ManageBook');
    }
}
