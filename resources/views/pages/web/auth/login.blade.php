<x-auth-layout title="'Login">
  <form method="post" action="{{ route('auth.login') }}" class="signup-form">
      @csrf

    <div class="login">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          
          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismis="alert" aria-label="Close"></button>
            </div>
            @endif

            <h2 class="form-group text-center">Form Login</h2>
          <div class="form-group">
            <input type="email" class="form-control @error ('email') is-invalid @enderror"  id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-mail" value="{{ old('email')}}" />
            @error ('email')
              <div class="invlaid-feedback">
              {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <div class="input-group">
              <input type="password" id="pass" class="form-control" name="password" placeholder="Password"/>
              @error('password')
                <span class="invalid-feedback" >
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <button type="submit" name="login" class="btn btn-primary ">Login</button>
            <div class="bottom">
                <a href="{{ route('auth.register') }}">Register</a>
                <a href="">Forgot Password</a>
            </div>
      </form>
    </div>
</x-auth-layout>