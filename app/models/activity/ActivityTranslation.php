<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/03/2016
 * Time: 22:58
 */
namespace App\Models\Activity;
use Illuminate\Database\Eloquent\Model as Eloquent;

class ActivityTranslation extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['Text'];
}