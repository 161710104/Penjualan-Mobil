
<div class="left-sidebar">
						<h2>Merk</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
								</div>
							</div>
							@php
                        $merk = App\Merk::paginate(6);
                        @endphp
                

              			@foreach($merk as $data)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="/catalog/{{$data->id}}">{{$data->nama}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->
					</div>