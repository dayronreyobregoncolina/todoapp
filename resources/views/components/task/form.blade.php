<!-- Name -->
<div>
    <x-label for="name" value='Name'/>
    <x-input :value="$task->name??''"
             id="name" class="block mt-1 w-full" type="text" required
             name="name" autofocus/>
</div>
<!-- Description -->
<div class="mt-4">
    <x-label for="escription" value='Description'/>

    <x-input :value="$task->description??''"
             id="description" class="block mt-1 w-full" type="text"
             name="description" required/>
</div>
<!-- Status -->
<div class="mt-4">
    <x-label for="status_id" value='Status'/>

    <select name="status_id" id="status_id" required style="width: 100%"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @foreach($statuses as $status)
            @if($task!=null)
                @if($status->id==$task->status_id)
                    <option selected value="{{$status->id}}">{{$status->name}}</option>
                @else
                    <option value="{{$status->id}}">{{$status->name}}</option>
                @endif
            @else
                <option value="{{$status->id}}">{{$status->name}}</option>
            @endif
        @endforeach
    </select>
</div>
