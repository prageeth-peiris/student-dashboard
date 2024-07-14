<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'registration_number','name','email'];

        public function marks(){
            return $this->hasMany(Mark::class);
        }


        public function user(){
            return $this->belongsTo(User::class);
        }


}
