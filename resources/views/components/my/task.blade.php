<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-1">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-10">
                <p>{{$name}}</p>
                <p>{{$description}}</p>
                <p>{{$status}}</p>
            </div>
            <div>
                <x-my.a route="{{route('tasks.show',1)}}"></x-my.a>
            </div>
        </div>
    </div>
</div>

