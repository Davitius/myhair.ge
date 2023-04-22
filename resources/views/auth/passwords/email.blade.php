@extends('layouts.main')

@section('content')

    <main class="login_register">
        <div class="container">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-headeri">{{ __('პაროლის აღდგენა / შეცვლა') }}</div>
                        <div class="card-bodyy">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
{{--                                    {{ session('status') }}--}}
                                    <label class="">პაროლის აღდგენის ბმული გაიგზავნა!</label>

                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('ელ. ფოსტა') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="errorMassageSpan">
                                        {{ $message }}
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-5 offset-md-4">
                                    <div class="AuthDiv mx-auto">
                                        <button type="submit" class="booksyBtn btn1">
                                            {{ __('გაგზავნე ბმული') }}
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
