<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function simpleTexts(){
        return $this->hasMany(SimpleText::class);
    }
    public function modalCards(){
        return $this->hasMany(ModalCard::class);
    }
}
