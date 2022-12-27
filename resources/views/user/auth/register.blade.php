<x-app>
    <x-slot name="title">
        User Register
    </x-slot>
    <div>
        <div>
            <h1>User Register</h1>
        </div>
        <div>
            <form method="POST" action="{{ route('postUserRegister') }}">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="current-password" />
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
            <div>
                <div style="margin: 40px">
                    <a style="margin: 40px" href={{ route('getWelcome') }} as="button">
                        User Welcome
                    </a>
                    <a style="margin: 40px" href={{ route('getUserLogin') }} as="button">
                        User Login
                    </a>
                    <a style="margin: 40px" href={{ route('getUserHome') }} as="button">
                        User Dashboard Home
                    </a>
                </div>
            </div>
        </div>
</x-app>
