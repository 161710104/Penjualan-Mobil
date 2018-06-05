@extends('layouts.layout')
@section('content')
<div class="content">
        <div class="row">
<div class="col-md-12">
            <div class="card card-user">
              <div class="image">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <h5 class="title">{{$a->nama}}</h5>
                  </a>
                  <p class="description">
                    Merk : {{$a->Merk->nama}}
                  </p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection