<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tentukan nama tabel
    protected $table = 'categories';

    protected $fillable = ['nama', 'slung'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
