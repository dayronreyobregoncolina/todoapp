@props(['task'])
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-1">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-10">
                <p>{{$task->name}}</p>
                <p>{{$task->description}}</p>
                <p>{{$task->status->name}}</p>
            </div>
            <div>
                <x-a route="{{route('tasks.show',$task)}}"> {{ 'Detail' }}</x-a>
            </div>
        </div>
    </div>
</div>

