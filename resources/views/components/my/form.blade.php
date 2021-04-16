<div class="overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <!-- Name -->
            <div>
                <x-label for="name" value='Name'/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus/>
            </div>
            <!-- Description -->
            <div class="mt-4">
                <x-label for="escription" value='Description'/>

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" required/>
            </div>
            <!-- Status -->
            <div class="mt-4">
                <x-label for="status_id" value='Status'/>

                <select name="status_id" id="status_id" required style="width: 100%"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ 'Create' }}
                </x-button>
            </div>
        </form>
    </div>
</div>
