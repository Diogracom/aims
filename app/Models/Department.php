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

    public function users(){
        return $this->hasMany(User::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }
}
