<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cpu;
use App\Models\gpu;

class Parameter extends Model
{
    use HasFactory;

    public function cpu()
    {
        return $this->belongsTo(cpu::class);
    }

    public function gpu()
    {
        return $this->belongsTo(gpu::class);
    }
}
