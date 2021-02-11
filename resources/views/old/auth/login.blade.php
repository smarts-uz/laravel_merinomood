@extends('old.layouts.auth')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div>
            <div class="flex flex-col items-center pt-10">
                <div class="text-lg text-gray-850 font-medium mb-8">
                    <h2>Log in to your account</h2>
                </div>

                <div class="w-1/2 sm:w-8/12 xs:w-10/12 2xs:w-full flex justify-center">
                    <form method="POST" class="w-6/12 xl:w-9/12 l:w-11/12 md:w-full" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-8">
                            <div class="text-center">
                                <input id="email" type="email" placeholder="Login or e-mail" class="pb-2 text-gray-540 text-lg 3xs:text-left 3xs:pl-5 border-b-2 border-gray-550 focus:outline-none text-center w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div class="pt-2">
                                    <span class="text-red-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="relative text-center">
                                <input id="password" type="password" placeholder="Password" class="pb-2 3xs:text-left 3xs:pl-5 text-gray-540 text-lg border-b-2 border-gray-550 focus:outline-none text-center w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-540 absolute bottom-0 right-0 pb-3" href="{{ route('password.request') }}">
                                        Forgot Password?
                                    </a>
                                @endif
                                @error('password')
                                <div class="pt-2">
                                    <span class="text-red-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0">
                            <div class="flex flex-col">
                                <div class="flex justify-center">
                                    <button type="submit" class="text-base font-medium text-gray-850 w-7/12 py-3 border-2 border-orange-450 focus:outline-none mb-1">
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
