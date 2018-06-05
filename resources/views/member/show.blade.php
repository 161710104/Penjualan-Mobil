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
                    <img class="avatar border-gray" src="{{asset('/img/'.$a->foto.'')}} " width="70" height="70">>
                    <h4 class="title">Member</h5>
                    <h6 class="title">[{{$a->nama}}]</h4>
                  </a>

                  <p class="description">
                    Email : {{$a->email}}
                  </p>

                  <p class="description">
                    Jenis Kelamin : {{$a->jenis_kelamin}}
                  </p>

                  <p class="description">
                    No Hp : {{$a->no_hp}}
                  </p>

                  <p class="description">
                    Lokasi : {{$a->lokasi}}
                  </p>

                  <p class="description">
                    Alamat :{{$a->alamat}}
                  </p>

                  <p class="description">
                    @foreach($a->Mobil as $jd)<li>Mobil : {{ $jd->nama }}<br>@endforeach</li>
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