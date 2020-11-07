@extends('layouts.app')
   @section('title','Dashboard')

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
  <div class="box">
    <div class="box-header with-border">
      <h1 class="box-title">Buat Akun Dokter</h1>
       <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
    <form action="{{ url('/akun-dokter/create') }}" method="POST">
    @csrf
        <fieldset>
        <legend>Tambah Data Akun Dokter</legend>
        <p>
            <label>Nama:</label>
            <input type="text" name="name" placeholder="Nama lengkap..." />
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Your email..." />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password..." />
        </p>
        <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="gender" value="1" /> Pria</label>
            <label><input type="radio" name="gender" value="2" /> Wanita</label>
        </p>
        <p>
            <label>Alamat:</label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label>NoHp:</label>
            <input type="number" name="nohp" placeholder="Nohp....." />
        </p>
        <p>
            <input type="submit" name="submit" value="Buat Akun" />
        </p>
        </fieldset>
    </form>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
  @endsection
