<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function about()
    {
        return $this->hasMany(About::class);
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
