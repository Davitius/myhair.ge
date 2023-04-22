@extends('layouts.main')

@section('content')

    <main class="login_register">
        <div class="container">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-headeri">{{ __('რეგისტრაცია') }}</div>
                        <div class="card-bodyy">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('სახელი') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="errorMassageSpan">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('ელ. ფოსტა') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" autocomplete="email">
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
                                               name="password" autocomplete="new-password">
                                        @error('password')
                                        <span class="errorMassageSpan">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-end">{{ __('გაიმეორე პაროლი') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="mt-5 offset-md-4">
                                    <div class="AuthDiv mx-auto">
                                        <button type="submit" class="booksyBtn btn1">
                                            {{ __('რეგისტრაცია') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col-md-8 -->
        </div><!-- /.container -->
    </main>
@endsection
