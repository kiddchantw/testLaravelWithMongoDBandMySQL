<?php


namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class TestMongo extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'test001';

}

?>