<x-auth>
    <x-slot name="title">
        Admin Home
    </x-slot>
    @auth('admin')
        <h1>This content will only be visible to the logged in Admin.</h1>
        <form action={{ route('adminLogout') }} method="get">
            <button>
                Logout
            </button>
        </form>
    @endauth
</x-auth>
