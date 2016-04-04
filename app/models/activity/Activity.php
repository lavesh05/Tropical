<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 11/03/2016
 * Time: 22:40
 */
namespace App\Models\Activity;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Activity extends Eloquent
{
    use Translatable;

    public $useTranslationFallback = true;
    /**
     * Array with the fields translated in the Translation table.
     *
     * @var array
     */
    public $translatedAttributes = ['Text'];
    /**
     * Set $translationModel if you want to overwrite the convention
     * for the name of the translation Model. Use full namespace if applied.
     *
     * The convention is to add "Translation" to the name of the class extending Translatable.
     * Example: Country => CountryTranslation
     */
    public $translationModel;
    /**
     * This is the foreign key used to define the translation relationship.
     * Set this if you want to overwrite the laravel default for foreign keys.
     *
     * @var
     */
    public $translationForeignKey;
    /**
     * Add your translated attributes here if you want
     * fill them with mass assignment.
     *
     * @var array
     */
    public $fillable = ['name','region','price','discount','active'];
    /**
     * The database field being used to define the locale parameter in the translation model.
     * Defaults to 'locale'.
     *
     * @var string
     */
    public $localeKey;


}