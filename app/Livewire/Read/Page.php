<?php

namespace App\Livewire\Read;

use Livewire\Component;
use App\Models\_News;
class Page extends Component
{
    public $_news;
    public function render()
    {
        $this->_news = _News::all();
        return view('livewire.read.page');
    }
    public function delete($id){
        //dd($id);
        _News::find($id)->delete();
    }
}
