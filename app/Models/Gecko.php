<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gecko extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_name',
        'morph',
        'gender',
        'age',
        'feeding',
        'dob',
        'defect',
        'description',
        'price',
        'status',
        'image',
        'images',
        'is_featured',
    ];

    protected $casts = [
        'images' => 'array',
        'is_featured' => 'boolean',
    ];

    public function orders()
{
    return $this->hasMany(Order::class);
}
}