<x-auth>
    <x-slot name="title">
        User Home
    </x-slot>
    @auth('user')
        <h1>This content will only be visible to the logged in User.</h1>
        <form action={{ route('userLogout') }} method="get">
            <button>
                Logout
            </button>
        </form>
    @endauth
</x-auth>
