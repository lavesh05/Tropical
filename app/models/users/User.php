<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 14/03/2016
 * Time: 14:48
 */

namespace App\Models\Users;


use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 *
 * @property int    id
 * @property string name
 * @property string email
 *
 * @package App\Models\Users\Users
 */
class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get all of the owning user-able models.
     */
    public function userable()
    {
        return $this->morphTo();
    }


    /**
     * A Client is a user that is a member of an organization in contract with Fidecorex
     *
     * @return bool return `true` if the user is a Client, `false` otherwise
     */
    public function isClient()
    {
        // TODO Implement the logic

        return false;
    }


    /**
     * An Employee is a user that is employed by Fidecorex
     *
     * @return bool return `true` if the user is an Employee, `false` otherwise
     */
    public function isEmployee()
    {
        // TODO Implement the logic

        return false;
    }
}