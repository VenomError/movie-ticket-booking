<x-layout.auth>
    <div class="section-header-3">
        <span class="cate">register</span>
        <h2 class="title">to boleto</h2>
         @error('register')
            <div class="alert alert-danger mt-2 text-center" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <form class="account-form" action="{{ route('registerProcess') }}" method="post" >
        @csrf
        <x-input name="name" label="Name" placeholder="Enter Full Name"  required />
        <x-input name="email" label="email" placeholder="Enter Email Address" type="email" required  />
        <x-input name="password" label="password" placeholder="Enter Password" type="password" required  />
        <div class="form-group text-center">
            <input
                type="submit"
                value="register"
            >
        </div>
    </form>
    <div class="option">
        Already have an account? <a href="{{ route('login') }}">Sign In</a>
    </div>
</x-layout.auth>
