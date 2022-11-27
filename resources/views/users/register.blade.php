@section('link')
    <link rel="stylesheet" href="{{ URL::asset('/css/users/register.css') }}">
@endsection
<x-layout>
    <div class="paddingTop">

        <div class="formContainer">

            <form action="/users" method="POST">
                @csrf
                <div class="formLine">
                    <label for="name" class="labelText">
                        First name
                    </label>
                    <input type="text" class="inputField" name="first_name" value="{{ old('first_name') }}" required />
                    @error('first_name')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>

                <div class="formLine">
                    <label for="email" class="labelText">Last name</label>
                    <input type="text" class="inputField" name="last_name" value="{{ old('last_name') }}" required />
                    <!-- Error Example -->
                    @error('email')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>
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
                    <label for="password2" class="labelText">
                        Confirm Password
                    </label>
                    <input type="password" class="inputField" name="password_confirmation" required />
                    @error('password_confirmation')
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
                        Already have an account?
                        <a href="/login" class="linkBlue">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

</x-layout>
