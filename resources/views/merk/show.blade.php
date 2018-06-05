@extends('layouts.layout')
@section('content')
  <div class="content">
        <div class="row">
<div class="col-md-12">
            <div class="card card-user">
              <div class="image">
                <img src="/admin/assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{asset('/img/'.$a->gambar.'')}} " width="70" height="70">>
                    <h5 class="title">{{$a->nama}}</h5>
                  </a>
                  <p class="description">
                    @foreach($a->Tipe as $jd)<li>Tipe : {{ $jd->nama }}<br>@endforeach</li>
                  </p>
                </div>
                <p class="description text-center">
                  {{ $a->deskripsi }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection