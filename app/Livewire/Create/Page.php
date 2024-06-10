<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\_News;

class Page extends Component
{
    public $title;
    public $short;
    public $long;
    public function render()
    {
        return view('livewire.create.page');
    }
    public function save(){
       //dd($this->title, $this->short, $this->long);
       _News::create ([
        'title'=>$this->title,
        'short'=>$this->short,
        'long'=>$this->long,
       ]);
       $this->title=null;
        $this->short=null;
        $this->long=null;
    }
}
