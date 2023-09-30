@extends('layouts.app')

@section('content')

<div class="container mx-auto">
        
             {{-- div card --}}
            <div class="py-10 m-auto flex flex-col items-center text-center">

               
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="bg-gray-300 p-8">

                             {{-- Titulo --}}
                           <div class="text-gray-900 text-3xl font-bold py-5">{{ __('Register') }}</div>

                       
                            <label for="name" class="text-xl text-gray-900">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="placeholder:italic placeholder:text-slate-400  bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="email" class="text-xl text-gray-900">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="placeholder:italic placeholder:text-slate-400 bg-white  border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password" class="text-xl text-gray-900">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="placeholder:italic placeholder:text-slate-400 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password-confirm" class="text-xl text-gray-900">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="placeholder:italic placeholder:text-slate-400 bg-white border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                    {{ __('Register') }}
                                </button>
                            </div>

                        </div>

                    </form>
            </div>
</div>
@endsection
