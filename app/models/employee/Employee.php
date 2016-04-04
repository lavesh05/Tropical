<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 14/03/2016
 * Time: 14:58
 */

namespace App\Models\Employee;

//use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property int       id
 * @property string    title
 * @property string    lastname
 * @property string    firstname
 * @property string    landline_phone
 * @property string    mobile_phone
 * @property string    email
 * @property boolean   is_admin
 * @property \DateTime created_at
 * @property \DateTime updated_at
 *
 * @package App\Models\Employee\Employee
 */

class Employee extends Model
{


    const ATTR_IS_ADMIN = 'is_admin';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'lastname',
        'firstname',
        'landline_phone',
        'mobile_phone',
        'email',
        self::ATTR_IS_ADMIN,
    ];


    protected $hidden = [
    ];


    /**
     * Get the user.
     */
    public function user()
    {
        return $this->morphOne('App\Models\Users\User', 'userable');
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @param string $title
     *
     * @return Employee
     */
    public function setTitle($title)
    {
        $this->title = Str::nullIfEmpty($title);

        return $this;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }


    /**
     * @param string $lastname
     *
     * @return Employee
     */
    public function setLastname($lastname)
    {
        $this->lastname = Str::nullIfEmpty($lastname);

        return $this;
    }


    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * @param string $firstname
     *
     * @return Employee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = Str::nullIfEmpty($firstname);

        return $this;
    }



    /**
     * @return string
     */
    public function getLandlinePhone()
    {
        return $this->landline_phone;
    }


    /**
     * @param string $landline_phone
     *
     * @return Employee
     */
    public function setLandlinePhone($landline_phone)
    {
        $this->landline_phone = Str::nullIfEmpty($landline_phone);

        return $this;
    }


    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }


    /**
     * @param string $mobile_phone
     *
     * @return Employee
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = Str::nullIfEmpty($mobile_phone);

        return $this;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param string $email
     *
     * @return Employee
     */
    public function setEmail($email)
    {
        $this->email = Str::nullIfEmpty($email);

        return $this;
    }


    /**
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->{self::ATTR_IS_ADMIN};
    }


    /**
     * @param boolean $is_admin
     *
     * @return Employee
     */
    public function setIsAdmin($is_admin)
    {
        $this->{self::ATTR_IS_ADMIN} = $is_admin;

        return $this;
    }
}