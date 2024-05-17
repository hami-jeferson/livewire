<?php

namespace App\Livewire;

use Livewire\Component;

class TestPage extends Component
{
    public $name;
    public $family;
    public function mount($post)
    {
        $this->name = $post['name'];
        $this->family = $post['family'];
    }

    public function changeName()
    {
        $this->name = 'pitter';
        $this->family = 'peterolli';
    }
    public function render()
    {
        return view('livewire.test-page');
    }
}
