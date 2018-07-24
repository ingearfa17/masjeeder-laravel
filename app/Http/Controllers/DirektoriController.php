<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Direktori;

class DirektoriController extends Controller
{
  /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    //
    $direktori = Direktori::all();
    return view('admin.direktorimasjid.index',compact('direktori'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
    return view('admin.direktorimasjid.create');
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
      'nama_masjid' => 'required',
      'lokasi_masjid' => 'required',
    ]);
    Direktori::create($data);
    return redirect('admin/direktorimasjid')->with('alert-success','Berhasil Menambahkan Data!');
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
    $data = Direktori::where('id',$id)->get();
    return view('admin.direktorimasjid.edit',compact('data'));
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
      'nama_masjid' => 'required',
      'lokasi_masjid' => 'required',
    ]);
    Direktori::find($id)->update($data);
    return redirect('admin/direktorimasjid')->with('alert-success','Data berhasil diubah!');
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
    $data = Direktori::where('id',$id)->first();
    $data->delete();
    return redirect('admin/direktorimasjid')->with('alert-success','Berhasil Menghapus Data!');
  }
}
