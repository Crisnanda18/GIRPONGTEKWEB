@extends('layouts.newapp')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">


<div class="container-sm ml-1" style="margin-top: 80px;">
    <div class="row">
      <div class="col-5">
        <img src="{{ asset('/poster/'.$film->poster) }}" width="400" style="border-radius: 15px;">
      </div>
      <div class="col-7 mt-2">
        <h2 class="card-title" style="font-weight: bold; color: #97d70f;">{{$film->judul}} <span>({{$film->tahun}})</span></h2>
        <h5 class="text mt-2"  style="color: #97d70f;">Director: <span style="color: white"; >{{$film->sutradara}}</span></h5>
        <p class="card-text" style="color: #97d70f;">{{$film->sinopsis}}</p>
        <a href="{{ route('kategori.show',['id'=>$film->kategori->id]) }}">
             <div class="badge text-wrap" style="width: 6rem; background-color: #8bc410; color: #ffffff;">
            {{$film->kategori->nama}}
            </div>
        </a>
       <a href="{{ route('genre.show',['id'=>$film->genre->id]) }}">
        <div class="badge text-wrap" style="width: 6rem; background-color: #8bc410; color: #ffffff;">
            {{$film->genre->name}}
        </div>
       </a>
        
      </div>
    </div>
</div>
@endsection