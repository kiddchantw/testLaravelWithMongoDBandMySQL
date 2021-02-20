<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMySQL extends Model

// Eloquent

//Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'tasks';


}
