<?php

namespace Bene\Crud\Controllers;

use Illuminate\Database\Eloquent\Model;
class Task extends Model
{
    protected $fillable = ['name','description'];
}
