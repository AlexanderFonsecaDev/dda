<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jury(){
        return $this->hasOne(User::class,'jury_id');
    }

    public function competitor(){
        return $this->hasOne(User::class,'competitor_id');
    }

    public function questions(){
        return $this->belongsToMany(Question::class);
    }

}
