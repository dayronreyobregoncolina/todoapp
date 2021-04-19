<div class="col-span-2">
    @foreach($tasks as $task)
        <x-task.task :task="$task"></x-task.task>
    @endforeach
</div>
