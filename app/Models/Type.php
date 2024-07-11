<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon'
    ];

    //dichiaro che type passa dati a progetti
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
