<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'description',
        'price',
            ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}