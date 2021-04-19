<div class="overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <form method="POST" action="{{ route('tasks.update',$task) }}">
            @method('PUT')
            @csrf
            <x-task.form :task="$task"></x-task.form>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3 mr-1">
                    {{ 'Save' }}
                </x-button>
            </div>
        </form>
        <form method="POST" action="{{route('tasks.destroy',$task)}}">
            @method('DELETE')
            @csrf
            <x-button class="ml-3">
                {{ 'Eliminar' }}
            </x-button>
        </form>
    </div>
</div>
