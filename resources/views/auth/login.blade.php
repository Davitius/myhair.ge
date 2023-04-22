@extends('layouts.main')

@section('content')
    <main class="login_register">
        <div class="container">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-headeri">{{ __('ავტორიზაცია') }}</div>
                        <div class="card-bodyy">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('ელ. ფოსტა') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="errorMassageSpan">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-end">{{ __('პაროლი') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" autocomplete="current-password">
                                        @error('password')
                                        <span class="errorMassageSpan" role="alert">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('დამიმახსოვრე') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 offset-md-4 d-flex justify-content-center">
                                    <div class="AuthDiv mx-auto">
                                        <button type="submit" class="booksyBtn btn1">
                                            {{ __('ავტორიზაცია') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="forgotPassDiv">
                                    @if (Route::has('password.request'))
                                        <a class="btn link-dark" href="{{ route('password.request') }}">
                                            {{ __('დაგავიწყდა პაროლი?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col-lg-8 -->
        </div><!-- /.container -->
    </main>
@endsection
