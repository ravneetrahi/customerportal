<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'announcements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];
}
