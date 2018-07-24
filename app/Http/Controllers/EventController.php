<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
  /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    //
    $event = Event::all();
    return view('admin.event.index',compact('event'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
    return view('admin.event.create');
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
      'tema_event' => 'required',
      'lokasi_event' => 'required',
      'waktu_event' => 'required',
    ]);
    Event::create($data);
    return redirect('admin/event')->with('alert-success','Berhasil Menambahkan Data!');
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
    $data = Event::where('id',$id)->get();
    return view('admin.event.edit',compact('data'));
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
      'tema_event' => 'required',
      'lokasi_event' => 'required',
      'waktu_event' => 'required',
    ]);
    Event::find($id)->update($data);
    return redirect('admin/event')->with('alert-success','Data berhasil diubah!');
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
    $data = Event::where('id',$id)->first();
    $data->delete();
    return redirect('admin/event')->with('alert-success','Berhasil Menghapus Data!');
  }
}
