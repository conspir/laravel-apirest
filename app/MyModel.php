<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MymModel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'phone', 'secretAttribute', 'password'];

    /**
     * @var array
     */
    protected $hidden = ['secretAttribute', 'password'];

}
