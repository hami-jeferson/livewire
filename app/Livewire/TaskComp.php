<?php

namespace App\Livewire;

use Livewire\Component;

class TaskComp extends Component
{
    public $name;
    public $tasks = ['task1', 'Task2'];
    public $new_task;

    public function addTask()
    {
        array_push($this->tasks, $this->new_task);
    }
    public function mount($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.task-comp');
    }
}
