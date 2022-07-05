@extends('layouts.auth-master')

@section('content')
  <div class="container">
    <form class="pt-10 space-y-4" method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="grid justify-items-center ">
        <img class="mb-4 w-56 h-22 " src="image\Prenatal_logo_logotype.jpg" alt="">
        </div>
        <h1 class="text-pink-600 text-2xl font-semibold">Accedi</h1>

        @include('layouts.partials.messages')

        <div class="grid justify-items-center mb-3">            
            <input type="text" name="username" value="{{ old('username') }}" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm block p-2.5 dark:placeholder-gray-400 focus:placeholder-pink-600 dark:text-white" placeholder="Indrizzo e-mail"  required="required" autofocus>
            @if ($errors->has('username'))
                <span class="">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="grid justify-items-center mb-3">
            <input type="password" name="password" value="{{ old('password') }}" id="id_password" placeholder="Password" class="w-1/3 bg-gray-50 border border-gray-300 text-gray-900 text-sm block p-2.5 dark:placeholder-gray-400 focus:placeholder-pink-600 dark:text-white" required="required">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative bottom-8 left-40" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            @if ($errors->has('password'))
                <span class="">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <button class="w-72 border-2 border-pink-600 text-white hover:text-pink-600 bg-pink-600  hover:bg-white font-medium rounded-full text-sm  py-2.5 text-center" type="submit">Accedi</button>
        <div class="text-sm pl-4 font-medium text-slate-500 ">
            Non hai un account?
            <a href="{{ route('register.perform') }}" class="text-pink-600 underline ">Registrati</a>
          </div>
    </form>
  </div>
@endsection
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');

togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye slash icon
  this.classList.toggle('fa-eye-slash');
});
</script>