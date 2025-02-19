@extends('layouts.app_login')

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Login -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{ url('/') }}" class="app-brand-link gap-2">
              <span class="app-brand-text demo text-body fw-bolder">Login</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Selamat Datang Di Hijab Glow</h4>
          <p class="mb-4">Tolong Masukan Akun Anda </p>

          <!-- Laravel Login Form -->
          <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required
                autofocus
              />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}">
                    <small>Lupa Pasword?</small>
                  </a>
                @endif
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control @error('password') is-invalid @enderror"
                  name="password"
                  required
                  placeholder="••••••••"
                  aria-describedby="password"
                />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }} />
                <label class="form-check-label" for="remember-me"> Ingat Aku? </label>
              </div>
            </div>

            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
            </div>
          </form>

          <p class="text-center">
            <span>Baru Di Platform Kami?</span>
            <a href="{{ route('register') }}">
              <span>Buat Akun</span>
            </a>
          </p>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>
</div>
@endsection
