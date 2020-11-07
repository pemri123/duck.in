@extends('layouts.dokter')
   @section('title','Dashboard')
   @section('page-title','Home')

  @section('content')
  @if (!empty(Session::get('success')))
      <div class='alert alert-succes alert-warning'>
        <div class='alert-body'>
          <button class='close' data-dismiss='alert'>
            <span></span>
          </button>
          {{Session::get('success')}}
        </div>  
      </div>
  @endif
  <!-- Default box -->
  <!-- Default box -->
  <div class="box bg-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Ubah Profile</h3>
       <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
        <div class="card">
            <div class="card-header mb-0"><h5 class="text-center">Profile<span class="font-weight-bold text-primary">Dokter</span></h5></div>
            <div class="card-body">
          <form method="post" action="/edit-dokter/{{ $user->id }}">
          @method('patch')
          @csrf
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="masukan nama" name="name" value="{{$user->name}}">
              @error('name')
            <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            </div>  
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukan email" name="email" value="{{$user->email}}">
              @error('email')
            <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group">
             <label>Alamat</label>
             <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="masukan alamat" name="alamat" value="{{$user->alamat}}">
             @error('alamat')
            <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group">
             <label>NoHp</label>
             <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" placeholder="masukan nohp" name="nohp" value="{{$user->nohp}}">
             @error('nohp')
            <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </form>
          <br>
          <a href="/dokter" class="btn btn-primary">Kembali</a>

    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
  @endsection