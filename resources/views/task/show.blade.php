<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $task->name }}
        </h2>
    </x-slot>


    <div class="py-12 px-5">
        <x-task.edit :task="$task"></x-task.edit>

        <div class="py-12">
            <x-task.records></x-task.records>
        </div>

    </div>

</x-app-layout>
