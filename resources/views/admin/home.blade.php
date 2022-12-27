<x-auth>
    <x-slot name="title">
        Admin Home
    </x-slot>
    <h1>This content will only be visible to the logged in Admin.</h1>
    <div>
        <div style="margin: 40px">
            <a style="margin: 40px" href={{ route('getWelcome') }} as="button">
                User Welcome
            </a>
            <a style="margin: 40px" href={{ route('getAdminLogin') }} as="button">
                Admin Login
            </a>
            <a style="margin: 40px" href={{ route('getAdminRegister') }} as="button">
                Admin Register
            </a>
        </div>
    </div>
    <form action={{ route('adminLogout') }} method="get">
        <button>
            Logout
        </button>
    </form>
</x-auth>
