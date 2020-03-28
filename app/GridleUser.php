<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GridleUser extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'tbluser_authentication';
}
