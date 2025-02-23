<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // public function getRouteKeyName() esta es para definir el model binding, un slug que será usado para eso

    protected $fillable = ['title', 'description', 'long_description'];
    // protected $guarded = ['secret']; dangerous
    public function toggleComplete(){
        $this -> completed = !$this->completed;
        $this -> save();

    }
}
