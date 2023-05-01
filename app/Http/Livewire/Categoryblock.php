<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categoryblock extends Component
{
    public function render()
    {
        $categories = Category::All();

        return view('livewire.categoryblock', [
            'categories' => $categories
        ]);
    }
}
