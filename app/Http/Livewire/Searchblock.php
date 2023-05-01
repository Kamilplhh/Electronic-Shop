<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Searchblock extends Component
{
    public $search = '';

    public $showDiv = false;

    public function render()
    {
        $answers = [];

        if(strlen($this->search) >=3) {
            $answers = Product::where('name', 'LIKE', '%' . $this->search . '%')->take(10)->get();
        }
        
        return view('livewire.searchblock', [
            'answers' => $answers
        ]);
    }
}
