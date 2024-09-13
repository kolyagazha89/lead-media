<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    public $fillable=[
            'id',
            'name',
            'sername',
            'company_id',
            'email',
            'phone'
        ]
}
