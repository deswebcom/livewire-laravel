<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    public $site = 'DesarrolloWeb.com';
    
    public function render()
    {

        return view('livewire.first-component');
    }
}
