<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-control mb-5">
                <label class="label">
                  <span class="label-text">{{ __('Name') }}</span>
                </label> 
                <input type="text" name="name" :value="old('name')" class="input input-secondary input-bordered" required autofocus autocomplete="name">
            </div>

            <div class="form-control mb-5">
                <label class="label">
                  <span class="label-text">{{ __('Email') }}</span>
                </label> 
                <input type="email" name="email" :value="old('email')" class="input input-secondary input-bordered" required>
            </div>

            <div class="form-control mb-5">
                <label class="label">
                  <span class="label-text">{{ __('Password') }}</span>
                </label> 
                <input type="password" name="password" class="input input-secondary input-bordered" required autocomplete="new-password">
            </div>

            <div class="form-control mb-5">
                <label class="label">
                  <span class="label-text">{{ __('Confirm Password') }}</span>
                </label> 
                <input type="password" name="password_confirmation" class="input input-secondary input-bordered" required autocomplete="new-password">
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="btn btn-primary ml-4">{{ __('Register') }}</button> 

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
