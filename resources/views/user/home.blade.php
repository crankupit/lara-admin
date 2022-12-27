<x-auth>
    <x-slot name="title">
        User Home
    </x-slot>
    <h1>This content will only be visible to the logged in User.</h1>
    <div>
        <div style="margin: 40px">
            <a style="margin: 40px" href={{ route('getWelcome') }} as="button">
                User Welcome
            </a>
            <a style="margin: 40px" href={{ route('getUserLogin') }} as="button">
                User Login
            </a>
            <a style="margin: 40px" href={{ route('getUserRegister') }} as="button">
                User Register
            </a>
        </div>
    </div>
    <form action={{ route('userLogout') }} method="get">
        <button>
            Logout
        </button>
    </form>
</x-auth>
