@extends('old.layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card flex flex-col items-center pt-10">
                <div class="text-lg text-gray-850 font-medium mb-8">Reset Password</div>

                <div class="w-1/2 sm:w-8/12 xs:w-10/12 2xs:w-full flex justify-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="w-6/12 xl:w-9/12 l:w-11/12 md:w-full" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-8">
                            <div class="text-center">
                                <input id="email" type="email" placeholder="E-Mail Address" class="pb-2 text-gray-540 text-lg border-b-2 border-gray-550 focus:outline-none text-center w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div class="pt-2">
                                    <span class="text-red-700" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="flex justify-center">
                                <button type="submit" class="text-base 3xs:w-full    font-medium text-gray-850 px-12 py-3 border-2 border-orange-450 focus:outline-none mb-1">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
