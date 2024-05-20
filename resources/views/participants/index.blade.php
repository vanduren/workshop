<x-app-layout>
    <x-slot name="title">
        {{ __('Deelnemers') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Deelnemers') }}
        </h2>
    </x-slot>
    @foreach($participants as $participant)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $participant->name }}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $participant->color }}</p>
            </div>
        </div>
    @endforeach
    @foreach ($roleCounts as $role => $roleCount)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $role }}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $roleCount }}</p>
            </div>
        </div>

    @endforeach

</x-app-layout>
