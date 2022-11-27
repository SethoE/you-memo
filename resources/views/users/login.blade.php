@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/users/login.css') }}">
@endsection
<x-layout>
    <div class="paddingTop">

        <div class="formContainer">

            <form action="/users/authenticate" method="POST">
                @csrf
                <div class="formLine">
                    <label for="email" class="labelText">Email</label>
                    <input type="email" class="inputField" name="email" value="{{ old('email') }}" required />
                    <!-- Error Example -->
                    @error('email')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="formLine">
                    <label for="password" class="labelText">
                        Password
                    </label>
                    <input type="password" class="inputField" name="password" required />
                    @error('password')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="formLine">
                    <button type="submit" class="submitButton">
                        Sign Up
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="/register" class="linkBlue">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

</x-layout>
