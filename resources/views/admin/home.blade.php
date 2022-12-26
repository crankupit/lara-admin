<x-auth>
    <x-slot name="title">
        Admin Home
    </x-slot>
    <h1>This page will be only visible to the logged in Admin.</h1>
    <form action={{ route('adminLogout') }} method="get">
        <button>
            Logout
        </button>
    </form>
</x-auth>
