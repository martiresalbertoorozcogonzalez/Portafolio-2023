@extends('layouts.app')

@section('content')

<div class="container mx-auto">

    {{-- div card --}}
    <div class="py-10 m-auto flex flex-col items-center text-center">
            
        
        <form method="POST" action="{{ route('login') }}">

            <div class="bg-gray-300 p-8">

            
                       <div class="header text-gray-900 text-3xl font-bold  py-5">{{ __('Login') }}</div>
            
                        @csrf
                        
                        <label for="email" class="text-xl text-gray-900">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="placeholder:italic placeholder:text-slate-400  bg-white  border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="row mb-3">
                            <label for="password" class="text-xl text-gray-900">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="placeholder:italic placeholder:text-slate-400  bg-white  border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-xl text-gray-900" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
        

                            <button type="submit" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                {{ __('Login') }}
                            </button>
    
                          
    
                            @if (Route::has('password.request'))
                                <a class="py-2 px-4 mt-3 bg-blue-400 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
            </div>
                                
        </form>
              
    </div>

</div>
@endsection
