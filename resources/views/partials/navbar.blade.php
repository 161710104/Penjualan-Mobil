<header class="app-header"><a class="app-header__logo" href="index.html">Cars-Dream</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <button class="btn btn-default" type="button" style="height: 40px;background-color: #009688">
      <h5><div style="font-family: NEISTIL;">
                <div class="dmy agileits w3layouts">
                <script type="text/javascript">
                var mydate=new Date()
                var year=mydate.getYear()
                if(year<1000)
                year+=1900
                var day=mydate.getDay()
                var month=mydate.getMonth()
                var daym=mydate.getDate()
                if(daym<10)
                daym="0"+daym
                var dayarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu")
                var montharray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")
                document.write(""+dayarray[day]+", "+daym+" "+montharray[month]+"  "+year+"")
                </script>
              </div>
              </div></h5></button>


              <button class="btn btn-default" type="button" style="height: 40px;background-color: #009688">
          <h5><div id="txt" style="font-family: NEISTIL;"></div></h5>
          </button>

     
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!--Notification Menu-->
        <!-- User Menu-->
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
      </ul>
    </header>