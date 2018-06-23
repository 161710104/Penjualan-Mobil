@extends('frontend.master')
<header id="header"><!--header-->

        @include('frontend.partials.headertop')
        
        @include('frontend.partials.headermiddle')
        
        @include('frontend.partials.headerbottom')
    </header><!--/header-->

@section('content')
<br>
<br>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('frontend.partials.merk')
				</div>

					@include('frontend.about.about')	
			</div>
		</div>
	</section>
	<br>
        

        @include('frontend.partials.footer')
@endsection
