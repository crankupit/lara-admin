<x-auth>
    <x-slot name="title">
        User Home
    </x-slot>
    <h1>This page will be only visible to the logged in User.</h1>
    <form action={{ route('userLogout') }} method="get">
        <button>
            Logout
        </button>
    </form>
</x-auth>
