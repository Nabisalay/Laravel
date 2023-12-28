<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdModel extends Model
{
    use HasFactory;

    protected $table = 'studentinfo';

    protected $id = 'id';
}
