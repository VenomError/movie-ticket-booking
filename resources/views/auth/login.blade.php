<x-layout.auth>
    <div class="section-header-3">
        <span class="cate">hello</span>
        <h2 class="title">welcome back</h2>
        @error('login')
            <div class="alert alert-danger mt-2 text-center" role="alert">
                {{ $message }}
            </div>
        @enderror
        @session('logout')
            <div class="alert alert-success mt-2 text-center" role="alert">
               Sucessfully Logout !
            </div>
        @endsession
    </div>
    <form
        class="account-form"
        action="{{ route('loginProcess') }}"
        method="post"
    >
        @csrf
        @method('POST')
        <x-input
            name="email"
            label="email"
            placeholder="Enter Email Address"
            type="email"
            required
        />
        <x-input
            name="password"
            label="password"
            placeholder="Enter Password"
            type="password"
            required
        />
        <div class="form-group checkgroup">
            <input
                type="checkbox"
                id="bal2"
                name="remember"
                checked
            >
            <label for="bal2">remember password</label>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="log in">
        </div>
    </form>
    <div class="option">
        Don't have an account? <a href="{{ route('register') }}">sign up now</a>
    </div>
</x-layout.auth>
