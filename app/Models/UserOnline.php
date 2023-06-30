<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOnline extends Model
{
    use HasFactory;

    protected $table = 'table_user_online';

    protected $primaryKey = 'session';

    public $timestamps = false;
}
