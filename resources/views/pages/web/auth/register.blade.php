<x-auth-layout title="Rgister">
  <div class="login">
    <form class="signup-form" action="{{ route('auth.register') }}" method="POST">
        @csrf
        <h2 class="form-group text-center">Form Registration</h2>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

        <div class="form-group">   
          <input type="text" class="form-control"  name="name"  placeholder="Nama " value="{{ old('name') }}"/>
          @error('name')
          <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
          </span>          
          @enderror
      </div>

        <div class="form-group">               
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" value="{{ old('email') }}"/>
          @error('email')
          <span class="invalid-feedback" >
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="form-group">
          <div class="input-group">
            <input type="password" id="pass" class="form-control" name="password" placeholder="Password" />
            @error('password')
            <span class="invalid-feedback" >
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>

        <button type="submit" name="login" class="btn btn-primary ">Register</button>
          <div class="bottom">
              sudah memiliki akun? <a href="{{ url('/auth') }}">login</a>
          </div>       
    </form>
  </div>
</x-auth-layout>