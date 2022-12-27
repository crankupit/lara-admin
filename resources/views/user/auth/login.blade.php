<x-app>
    <x-slot name="title">
        User Login
    </x-slot>
    <div>
        <div>
            <h1>User Login</h1>
        </div>
        <div>
            <form method="POST" action="{{ route('postUserLogin') }}">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <div>
                    <label for="remember_me">Remember me</label>
                    <input id="remember_me" type="checkbox" name="remember">
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
                    <a style="margin: 40px" href={{ route('getUserRegister') }} as="button">
                        User Register
                    </a>
                    <a style="margin: 40px" href={{ route('getUserHome') }} as="button">
                        User Dashboard Home
                    </a>
                </div>
            </div>
        </div>
</x-app>
