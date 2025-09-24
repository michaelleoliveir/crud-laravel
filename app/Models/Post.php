<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function getFormattedDataAttribute() {
        return $this->created_at->format('d/m/Y');
    }
}
