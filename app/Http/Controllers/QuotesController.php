<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\quotes;

class QuotesController extends Controller
{
  /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    //
    $quotes = Quotes::all();
    return view('admin.quotes.index',compact('quotes'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
    return view('admin.quotes.create');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $data = $this->validate($request, [
      'gambar' => 'required',
      'deskripsi_gambar' => 'required',
    ]);
    Quotes::create($data);
    return redirect('admin/quotes')->with('alert-success','Berhasil Menambahkan Data!');
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
    $data = Quotes::where('id',$id)->get();
    return view('admin.quotes.edit',compact('data'));
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
    $data = $this->validate($request, [
      'gambar' => 'required',
      'deskripsi_gambar' => 'required',
    ]);
    Quotes::find($id)->update($data);
    return redirect('admin/quotes')->with('alert-success','Data berhasil diubah!');
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
    $data = quotes::where('id',$id)->first();
    $data->delete();
    return redirect('admin/quotes')->with('alert-success','Berhasil Menghapus Data!');
  }
}
