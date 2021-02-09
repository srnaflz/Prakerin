 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{asset('assets2/assets/images/faces/face29.jpg')}}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"> {{ Auth::user()->name }}</span>
                  <span class="text-secondary text-small"> {{ Auth::user()->email }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Kasus Lokal</span>
              </a>
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('provinsi.index')}}">Provinsi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('kota.index')}}">Kota</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('kecamatan.index')}}">Kecamatan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('kelurahan.index')}}">Kelurahan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('rw.index')}}">Rw</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('kasuse.index')}}">Kasus</a></li>
                </ul>
            </li>
      
          

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Kasus Global</span>
              </a>
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('negara.index')}}">Negara</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Kasus</a></li>
                </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
         
          </ul>
        </nav>