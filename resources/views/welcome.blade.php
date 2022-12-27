<x-app>
    <x-slot name="title">
        Welcome Page
    </x-slot>
    <h1>Welcome! your laravel app is running successfully.</h1>

    <div>
        <div style="margin: 40px">
            <a style="margin: 40px" href={{ route('getUserLogin') }} as="button">
                User Login
            </a>
            <a style="margin: 40px" href={{ route('getUserRegister') }} as="button">
                User Register
            </a>
            <a style="margin: 40px" href={{ route('getUserHome') }} as="button">
                User Home
            </a>
        </div>
        <div style="margin: 40px">
            <a style="margin: 40px" href={{ route('getAdminLogin') }} as="button">
                Admin Login
            </a>
            <a style="margin: 40px" href={{ route('getAdminRegister') }} as="button">
                Admin Register
            </a>
            <a style="margin: 40px" href={{ route('getAdminHome') }} as="button">
                Admin Home
            </a>
        </div>
    </div>
</x-app>
