<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="text-center">
            <div class="my-2">
                <x-button>Add Facebook Review</x-button>
            </div>
            <div class="my-2">
                <x-button>Add Google Review</x-button>
            </div>
            <div class="my-2">
                <x-button>Show Price List</x-button>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
