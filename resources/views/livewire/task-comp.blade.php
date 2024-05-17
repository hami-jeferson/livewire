<div>
    <h5>{{$name}} Tasks</h5>
    <input type="text" wire:model="new_task">
    <button class="btn" wire:click="addTask">Add Task</button>

    <ul>
        @foreach($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
</div>
