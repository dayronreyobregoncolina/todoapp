<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-5">
        <div class="grid grid-cols-3 gap-4">
            <x-my.form></x-my.form>
            <x-my.tasks></x-my.tasks>
        </div>
    </div>

</x-app-layout>
