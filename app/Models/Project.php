<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'img_preview',
        'type_id'
    ];

    //dichiaro in una funzione che project dipende da type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
