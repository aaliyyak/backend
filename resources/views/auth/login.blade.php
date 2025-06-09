<div style="min-height: 90vh; display: flex; justify-content: center; align-items: center; background-image: url('/assets/images/7.svg'); padding: 30px;">
  <div style="
    background: white;
    padding: 2rem 2.5rem;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    background-image: url('/assets/images/33.png');
    width: 390px;
    display: flex;
    gap: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    align-items: center;
  ">
    <!-- Logo -->
    <div style="flex: 1; text-align: left;">
      <img src="https://logospng.org/download/laravel/logo-laravel-1024.png" alt="Laravel Logo" style="width: 130px; margin: 0 auto; display: block;" />
    </div>

    <!-- Form -->
    <div style="flex: 1;">
      <x-auth-session-status class="mb-3" :status="session('status')" style="font-size: 14px; color: #d9534f; margin-bottom: 15px;" />

      <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <!-- Username -->
        <div style="margin-bottom: 15px;">
          <div style="text-align: left; margin-bottom: 6px;">
            <x-input-label for="username" :value="__('Username')" style="font-weight: 600; font-size: 14px; color: #333;" />
          </div>
          <x-text-input
            id="username"
            class="block w-100 mt-2"
            type="text"
            name="username"
            :value="old('username')"
            required autofocus autocomplete="username"
            style="padding: 10px 12px; border: 1.5px solid #ccc; border-radius: 6px; font-size: 14px; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#3b82f6';"
            onblur="this.style.borderColor='#ccc';"
          />
          <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div style="margin-bottom: 15px;">
          <div style="text-align: left; margin-bottom: 6px;">
            <x-input-label for="password" :value="__('Password')" style="font-weight: 600; font-size: 14px; color: #333;" />
          </div>
          <x-text-input
            id="password"
            class="block w-100 mt-2"
            type="password"
            name="password"
            required autocomplete="current-password"
            style="padding: 10px 12px; border: 1.5px solid #ccc; border-radius: 6px; font-size: 14px; transition: border-color 0.3s ease;"
            onfocus="this.style.borderColor='#3b82f6';"
            onblur="this.style.borderColor='#ccc';"
          />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-check" style="text-align: left; margin-bottom: 20px;">
          <input id="remember_me" type="checkbox" class="form-check-input" name="remember" style="width: 16px; height: 16px; cursor: pointer;">
          <label for="remember_me" class="form-check-label" style="font-size: 14px; cursor: pointer; user-select: none;">{{ __('Remember me') }}</label>
        </div>

        <!-- Forgot Password + Login -->
        <div class="d-flex justify-content-between align-items-center" style="font-size: 14px;">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-decoration-none small" style="color: #3b82f6; transition: color 0.3s ease;">
              {{ __('Forgot your password?') }}
            </a>
          @endif

          <!-- Tombol Login Custom -->
          <button id="loginButton" type="submit">
            {{ __('Log in') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  #loginButton {
    position: relative;
    padding: 12px 30px;
    background-color: rgb(173, 14, 46);
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    overflow: hidden;
    z-index: 1;
    transition: color 0.3s ease;
  }

  #loginButton::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #ff0047, #2c34ff, #00f0ff, #000000);
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    opacity: 0;
    border-radius: 10px;
    transition: opacity 0.3s ease;
    animation: rotateNeon 8s linear infinite;
  }

  #loginButton:hover::before,
  #loginButton:active::before {
    opacity: 1;
  }

  @keyframes rotateNeon {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
</style>
