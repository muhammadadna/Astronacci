@extends('layout.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('name') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <a class="w-100 btn btn-lgbtn btn-danger" href="{{ '/auth/redirect'}}">google</a>
              <a class="w-100 btn btn-lgbtn btn-secondary" href="{{ '/auth/redirect/fb'}}">Facebook</a>
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
<br>
<br>
<br>
<h4>User Untuk Login</h4>
<p>1. email : admin@gmail.com | Pass : password | Sebagai admin</p>
<p>2. email : user1@gmail.com | Pass : password | Sebagai member Star (All Posts)</p>
<p>3. email : user2@gmail.com | Pass : password | Sebagai member permium (10 Posts)</p>
<p>4. email : user3@gmail.com | Pass : password | Sebagai member regular (3 Posts)</p>


@endsection
