<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'pays';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nom'
    ];

    public $timestamps = true;
}
