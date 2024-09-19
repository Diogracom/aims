<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;     
use App\Models\Category; 


class Department extends Model
{
    use HasFactory;

    protected $fillable = ['department_name'];

    public function user(){
        return $this->belongsTo(User::class);
      }

    public function categories(){
        return $this->hasMany(Category::class);
    }
}
