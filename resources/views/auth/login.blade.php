<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
	<h1 class="text-center login-title">Sign In</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
		
        <!-- Email Address -->
        <div>
           
            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full bg-gray-100 gray-border" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            

            <x-text-input placeholder="Password" id="password" class="block mt-1 w-full bg-gray-100 gray-border"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="bg-gray-100 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
		
        <div class="flex items-center justify-end mt-4">
         
            <x-primary-button class="">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
		<div class="text-center  password-request">
			 @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('New password request') }}
                </a>
            @endif 

		</div>
    </form>
</x-guest-layout>
