@extends('layouts.app')
@section('title','Dashboard')
@section('page-title','Home')

@section('content')
<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Rekap Data Dokter</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      
      <div class="box-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Gender</th>
              <th scope="col">Nomor Hp</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dokter as $index => $item)
            <tr>
              <th scope="row">{{$index+1}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->gender }}</td>
              <td>{{ $item->nohp }}</td>
            </tr>
            @endforeach
          </tbody>
        </table> 
      </div>
      <!-- /.box-body -->
        <div class="box-header with-border">
          <h3 class="box-title">Rekap Data Peternak</h3>
      <div class="box-body">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Gender</th>
              <th scope="col">Nomor Hp</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($peternak as $index => $item)
            <tr>
              <th scope="row">{{$index+1}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->gender }}</td>
              <td>{{ $item->nohp }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection