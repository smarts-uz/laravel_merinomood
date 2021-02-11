@extends('old.layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div>
                <div>Confirm Password</div>

                <div>
                    Please confirm your password before continuing.

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit">
                                    Confirm Password
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
