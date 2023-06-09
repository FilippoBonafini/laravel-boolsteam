<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $guarded = ['slug'];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_platform');
    }
}
