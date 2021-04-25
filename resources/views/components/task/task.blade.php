@props(['task'])
@php
    $color='white';
       if ($task->trashed()){
            $color='red-100';
            }
        else{
            if ($task->status->id==2)
                $color='green-100';
        }

@endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-1 ">
    <div class="p-6 border-b bg-{{$color}} border-gray-200">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-8">
                <p>{{$task->name}}</p>
                <p>{{$task->description}}</p>
                <p>{{$task->status->name}}</p>
            </div>
            <div class="col-span-4">
                @if(!$task->trashed())
                    <x-a route="{{route('tasks.show',$task)}}"> {{ 'Detail' }}</x-a>
                    <x-a class="bg-red-700" route="{{route('tasks.destroy',$task->id)}}"> {{ 'Delete' }}</x-a>
                @else
                    <x-a route="{{route('tasks.restore',$task->id)}}"> {{ 'Restore' }}</x-a>
                    <x-a class="bg-red-700" route="{{route('tasks.destroy.force',$task->id)}}"> {{ 'F Destroy' }}</x-a>
                @endif
            </div>

        </div>
    </div>
</div>

