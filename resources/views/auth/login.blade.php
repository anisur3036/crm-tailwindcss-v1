@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-xs md:max-w-md">
        <div class="p-2 md:p-4 flex items-center justify-center"><img class="h-12 md:h-16 object-cover object-center" src="/img/SKCL-Logo.png" alt="SKCL"></div>
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4 md:mb-8">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-4 md:mb-8">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $password }}</strong>
                </span>
            @enderror
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-start">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <div class="ml-2 flex items-center justify-between">
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="mt-2 md:mt-4 flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Sign In
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
            </a>
        </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
        &copy;2020 SKCL. All rights reserved.
        </p>
  </div>
</div>
@endsection
