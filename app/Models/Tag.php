<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Tag extends Model
{
    use HasTranslations;
    
    protected $fillable = ['title', 'description'];
    public $translatable = ['title', 'description'];
    
    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}

