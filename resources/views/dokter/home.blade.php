@extends('layouts.dokter')
   @section('title','Dashboard')
   @section('page-title','Home')

  @section('content')
  <!-- Default box -->
  <div class="box bg-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Profile Akun</h3>
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
          <form>
            <div class="form-group">
              <label>Nama</label>
              <label class="form-control">{{$user->name}}</label>
            </div>  
            <div class="form-group">
              <label>Email</label>
              <label class="form-control"> {{$user->email}}</label>
            </div>
            <div class="form-group">
             <label>Alamat</label>
             <label class="form-control">{{$user->alamat}}</label>
            </div>
            <div class="form-group">
             <label>NoHp</label>
             <label class="form-control">{{$user->nohp}}</label>
            </div>
          </form>

    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
  @endsection