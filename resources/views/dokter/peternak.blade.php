@extends('layouts.dokter')
   @section('title','Dashboard')
   @section('page-title','Konsultasi')

  @section('content')
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
    <h2>Jawab Pertanyaan dari peternak</h2>
    @foreach ($peternak as $item)
    <div class="card w-75">
      <div class="card-body">
        <h3 class="card-title">Peternak : {{ $item->name }}</h3>
        <p class="card-text">{{ $item->description }}</p>
        <a href="{{ route('konsul.show', $item->id) }}" class="btn btn-primary">jawab pertanyaan</a>
      </div>
    </div>
    <br>
    @endforeach
@endsection