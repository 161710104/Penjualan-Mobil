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
                                <li><a data-toggle="modal" data-target="#MediumModal"><i class="fa fa-lock" style="color: white"></i><font color="white"> Masuk</font></a></li>
                                <li><a data-toggle="modal" data-target="#largeModal"><i class="fa fa-user" style="color: white"></i><font color="white"> Daftar</font></a></li>
                                <button type="button" class="btn btn-default" style="background-color:  #34495e" data-toggle="modal" data-target="#MediumModal"><image width="29" height="29" src="https://mobil123.icarcdn.com/images/label-free.png" alt="Free" class="absolute"><font style="color: white">Jual Mobil</font></image></button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

<!------------------------------------------------------Masuk/Register---------------------------------------------------------------->

@include('frontend.auth.register')


<!-- -----------------------------------------------------------Login----------------------------------------------------------------->

@include('frontend.auth.login')

    