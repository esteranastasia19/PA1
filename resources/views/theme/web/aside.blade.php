    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            {{-- <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 200px">
                        <a href="" class="nav-item nav-link">Ikan Mujahir</a>
                        <a href="" class="nav-item nav-link">Ikan Nila</a>
                        <a href="" class="nav-item nav-link">Ikan Lele</a>
                        <a href="" class="nav-item nav-link">Ikan Mas</a>
                        <a href="" class="nav-item nav-link">Ikan Ihan</a>
                    </div>
                </nav>
            </div> --}}
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Tobagofish</span></h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('sejarah') }}" class="nav-item nav-link">Sejarah Ikan</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Budidaya</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{ url('ikanmas') }}" class="dropdown-item">Ikan Mas</a>
                                    <a href="{{ url('ikanlele') }}" class="dropdown-item">Ikan Lele</a>
                                    <a href="{{ url('ikanmujahir') }}" class="dropdown-item">Ikan Mujahir</a>
                                    <a href="{{ url('ikannila') }}" class="dropdown-item">Ikan Nila</a>
                                    <a href="{{ url('ikanbatak') }}" class="dropdown-item">Ikan Batak</a>

                                </div>
                            </div>
                            <a href="{{ url('daftar') }}" class="nav-item nav-link">Daftar</a>
                            <a href="{{ url('restok') }}" class="nav-item nav-link">Restok</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <ul class="navbar-nav ms-auto">

                                @auth
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                      <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button> 
                                      </form>
                                    </li>
                                  </ul>
                                </li>
                                @else
                    
                                
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ url('/auth') }}">Login</a>
                                </li>
                                @endauth
                              </ul>                      
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <!-- Navbar End -->