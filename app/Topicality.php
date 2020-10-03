<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topicality extends Model
{
    protected $guarded=['id']; // je veux acceder a tous les champs sauf id
}
