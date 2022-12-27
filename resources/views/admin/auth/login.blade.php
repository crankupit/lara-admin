<x-app>
    <x-slot name="title">
        Admin Login
    </x-slot>
    <div>
        <div>
            <h1>Admin Login</h1>
        </div>
        <div>
            <form method="POST" action="{{ route('postAdminLogin') }}">
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
                    <a style="margin: 40px" href={{ route('getAdminRegister') }} as="button">
                        Admin Register
                    </a>
                    <a style="margin: 40px" href={{ route('getAdminHome') }} as="button">
                        Admin Dashboard Home
                    </a>
                </div>
            </div>
        </div>
</x-app>
