<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Client extends Model
{
    protected $fillable = array('id', 'name', 'email','phone','codeClient');
}
 