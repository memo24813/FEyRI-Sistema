<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-control mb-5">
                <label class="label">
                  <span class="label-text">{{ __('Email') }}</span>
                </label> 
                <input id="email" type="text" name="email" :value="old('email')" class="input input-secondary input-bordered" required autofocus>
            </div> 

            <div class="form-control mb-5">
                <label class="password">
                  <span class="label-text">{{ __('Password') }}</span>
                </label> 
                <input id="password" type="password" name="password" class="input input-secondary input-bordered" required autocomplete="current-password">
            </div> 

            <div class="p-6 card bordered">
                <div class="form-control">
                  <label class="cursor-pointer label">
                    <span class="label-text">{{ __('Remember me') }}</span> 
                    <input type="checkbox" checked="checked" name="remember" class="checkbox checkbox-primary">
                  </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-primary ml-4">{{ __('Log in') }}</button> 
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
