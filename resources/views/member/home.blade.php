@extends('member.master')
@section('content')
<div class="container">
    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="/home">Mobil</a></li>
                                <li><a href="#blazers" data-toggle="tab">Detail Mobil</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt" >
                                @include('member.mobil.index')
            </div>
            </div>
                    </div><!--/category-tab-->
                </div>
                    
@endsection