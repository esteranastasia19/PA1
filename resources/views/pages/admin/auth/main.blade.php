<x-admin-auth-layout title="Login">
  <form method="post" action="{{ route('admin.auth.login') }}" class="signup-form">
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

            <h3 class="form-group text-center">Admin Login</h3>
          <div class="form-group">
            <input type="email" class="form-control @error ('email') is-invalid @enderror"  id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-mail" />
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
          <button type="submit" class="btn btn-primary ">Login</button>
      </form>
    </div>
</x-admin-auth-layout>