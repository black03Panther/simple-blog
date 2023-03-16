<x-app-layout>
<form method="POST" action="{{ url('createpost') }}">
        @csrf

        <!-- Titel -->
        <div>
            <x-input-label for="title" :value="__('title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Eintrag -->
        <div class="mt-4">
            <x-input-label for="headline" :value="__('headline')" />
            <x-text-input id="headline" class="block mt-1 w-full" type="text" name="headline" :value="old('headline')" required />
            <x-input-error :messages="$errors->get('headline')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="body" :value="__('body')" />

            <x-text-input id="body" class="block mt-1 w-full"
                            type="text"
                            name="body"
                            required />

            <x-input-error :messages="$errors->get('body')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="picture" :value="__('Picture')" />

            <x-text-input id="picture" class="block mt-1 w-full"
                            type="file"
                            name="image" required />

            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Publish') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>