@extends('old.layouts.auth')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div>
            <div class="flex flex-col items-center pt-10">
                <div class="text-lg text-gray-850 font-medium mb-8">
                    <h2>Created Accounts</h2>
                </div>

                <div class="w-1/2 sm:w-8/12 xs:w-10/12 2xs:w-full flex justify-center">
                    <form method="POST" class="w-6/12 xl:w-9/12 l:w-11/12 md:w-full" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-8">
                            <div class="text-center">
                                <input id="email" type="email" placeholder="Enter your email address" class="pb-2 text-gray-540 text-lg border-b-2 border-gray-550 focus:outline-none text-center w-full" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <div class="text-center">
                                <input id="password" type="password" placeholder="Create a password" class="pb-2 text-gray-540 text-lg border-b-2 border-gray-550 focus:outline-none text-center w-full" name="password" required autocomplete="new-password">

                                @error('password')
                                <div class="pt-2">
                                   <span class="text-red-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <div>
                                <input id="password-confirm" placeholder="Confirm Your Password" type="password" class="pb-2 text-gray-540 text-lg border-b-2 border-gray-550 focus:outline-none text-center w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0 pt-9">
                            <div class="flex justify-center mb-3">
                                <button type="submit" class="text-base font-medium text-gray-850 px-12 py-3 border-2 border-orange-450 focus:outline-none mb-1 3xs:w-full">
                                    Create an Account
                                </button>
                            </div>
                            <div class="px-10 3xs:px-0">
                                <p class="text-center text-sm font-medium text-gray-520">By creating an account, you agree to terms of use and privacy policy.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
