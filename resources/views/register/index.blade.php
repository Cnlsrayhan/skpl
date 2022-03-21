@extends('layouts.main')

@section('container')

<div class="container">
</div>
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration ms-auto">
            <form action="/register" method="post">
                @csrf
                <center>
             <h1><b class="text-light">Let's Interact Each Other</b></h1>
            </center>
              <div class="form-floating shadow-lg">
                <input type="text" name="name" class="form-control @error('name') is-invalid
                @enderror" id="name" placeholder="Name" value="{{ old('name') }}" style="background: transparent">
                <label for="name" class="text-light">Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="text" name="username" class="form-control @error('username') is-invalid
                @enderror" id="username" placeholder="Username" value="{{ old('username') }}" style="background: transparent">
                <label for="username" class="text-light">username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="email" name="email" class="form-control @error('email') is-invalid
                @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" style="background: transparent">
                <label for="email" class="text-light">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="password" name="password" class="form-control @error('password') is-invalid
                @enderror" id="password" placeholder="Password" style="background: transparent">
                <label for="password" class="text-light">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <button class="w-100 btn btn-lg btn-outline-info btn-transparent text-light shadow-lg" type="submit">Submit</button>
            </form>
            <a class="d-block text-center text-light mt-3 text-decoration-none">
                Already Registered? <a class="d-block text-center text-light" href="/login">Lets Go!!!</a>
            </a>

          </main>
    </div>
</div>


@endsection
