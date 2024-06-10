<?php

namespace App\Livewire\Update;
use App\Models\_News;
use Livewire\Component;
class Page extends Component
{
    public $title;
    public $short;
    public $long;
    public function render()
    {
        return view('livewire.update.page');
    }
}
