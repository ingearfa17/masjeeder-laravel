@extends('admin.adminlayout')

@section('css')
<style>
table.table .actions {
    width: 100px;
    text-align: center;
}
</style>
@stop

@section('page-header')
  Quotes <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

<div class="col-sm-12 col-sm-offset-6 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">
              <em class="fa fa-home"></em>
              </a></li>
          <li class="active">Quotes Islamic</li>
      </ol>
    </div><br><!--/.row-->

<body>

  <div class="row">
    <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif
            <a href="{{ url('admin/quotes/create') }}" class="fa fa-plus-circle fa-2x"></a><h3 align="center">Quotes</h3>
            <hr>
            <table class="table table-striped  table-bordered data">
                <thead>
                <tr>
                  <th>No.</th>
                <th>Gambar</th>
                <th>Deskripsi Gambar</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quotes as $data)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                         <td>{{ $data->gambar }}</td>
                         <td>{{ $data->deskripsi_gambar }}</td>
                        <td>
                            <form action="{{ url('admin/quotes', $data->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ url('admin/quotes/'.$data->id.'/edit') }}" class=" btn btn-sm btn-primary">Update</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
@endsection
