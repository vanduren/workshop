<x-app-layouts>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('Nieuwe deelnemer') }}</h3>
            <form action="{{ route('participants.store') }}" method="POST">
                @csrf
                <div class="mt-5">
                    <label for="name" class="block text-sm font-medium text-gray-700">Naam</label>
                    <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mt-5">
                    <label for="color" class="block text-sm font-medium text-gray-700">Kleur</label>
                    <input type="text" name="color" id="color" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="mt-5">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        {{ __('Opslaan') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layouts>
