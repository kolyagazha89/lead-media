<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table='customers';
    public $fillable=[
            'name',
            'sername',
            'company_id',
            'email',
            'phone'
        ];
}
