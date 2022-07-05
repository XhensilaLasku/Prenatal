@extends('layouts.auth-master')

@section('content')
    <form class="pt-10 space-y-4" method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="grid justify-items-center ">
        <img class="mb-4 w-56 h-22 " src="image\Prenatal_logo_logotype.jpg" alt="">
        </div>
        <h1 class="text-pink-600 text-2xl font-semibold">Registrati</h1>

        <div class="grid justify-items-center mb-3">
            <input type="email" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm  block p-2.5 focus:placeholder-pink-600 dark:placeholder-gray-400 dark:text-white" name="email" value="{{ old('email') }}" placeholder="e-mail" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="grid justify-items-center mb-3">
            <input type="text" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm  p-2.5 focus:placeholder-pink-600  dark:placeholder-gray-400 dark:text-whiteontrolorm-" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="grid justify-items-center mb-3">
            <input type="password" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm  block p-2.5 dark:placeholder-gray-400 focus:placeholder-pink-600 dark:text-white" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="grid justify-items-center mb-3">
            <input type="password" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm block p-2.5 dark:placeholder-gray-400 focus:placeholder-pink-600 dark:text-white" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-72 border-2 border-pink-600 text-white hover:text-pink-600 bg-pink-600  hover:bg-white font-medium rounded-full text-sm  py-2.5 text-center" type="submit">Registrati</button>
        <div class="text-sm pl-4 font-medium text-slate-500 ">
            Hai un account?
            <a href="{{ route('login.perform') }}" class="text-pink-600 underline ">LogIn</a>
          </div>
    </form>
@endsection