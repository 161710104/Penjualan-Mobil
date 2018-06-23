<div class="header"><!--header-bottom-->
        </br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Merk<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @php
                        $a = App\Merk::all();
                        @endphp

                        @foreach($a as $data)
            
                                        <li><a href="shop.html">{{$data->nama}}</a></li>
                                         @endforeach
                                        
                                    </ul>
                                </li> 
                                <li><a href="404.html">Berita</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                        </br>
                    </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->