<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $table='companies';
    public $fillable=[
        'name',
        'email',
        'logo',
        'link'
    ];
}
