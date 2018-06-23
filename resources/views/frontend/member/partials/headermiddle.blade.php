<div class="header-middle" style="background-color: #3498db"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="user/images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                        <div class="pull-right">
                            <ul class="nav nav-pills">
                                <li class="dropdown"><a class="app-nav__item" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg" style="color: white"><font style="color: white"> {{ Auth::user()->name }}</font></i></a>
                                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                                        </li>
                                    </ul>
                                </li>
                                <button type="button" class="btn btn-default" style="background-color:  #34495e"><image width="29" height="29" src="https://mobil123.icarcdn.com/images/label-free.png" alt="Free" class="absolute"><font style="color: white">Jual Mobil</font></image></button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

    