<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCollection extends Model
{
    use HasFactory;

    protected $fillable = [
        'month_id',
        'department_id',
        'category_id',
        'subcategory_id',
        'data_ugx',
        'data_usd',
        'data_percent',
        'data_figure',
        'data_computed',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function month(){
        return $this->belongsTo(Month::class);
    }
}
