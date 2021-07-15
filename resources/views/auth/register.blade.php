<x-guest-layout>
    <a class="flex underline text-xs text-gray-600 hover:text-gray-900 justify-end mb-6" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>
    <div class="text-center mb-8 mt-4">会員登録</div>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="appearance-none block w-full bg-yellow-100 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name" :value="old('name')" placeholder="ユーザー名" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="appearance-none block w-full bg-yellow-100 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="email" name="email" :value="old('email')" placeholder="xxx@gmail.com" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="appearance-none block w-full bg-yellow-100 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="password" name="password" placeholder="********" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="appearance-none block w-full bg-yellow-100 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="password" name="password_confirmation" placeholder="********" required autocomplete="new-password" />
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

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full text-center px-3">
                    <button class="bg-transparent hover:bg-yellow-300 text-yellow-400 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">会員登録</button>
                </div>
            </div>
            </div>
        </form>
</x-guest-layout>
