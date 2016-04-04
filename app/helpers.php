<?php
/**
 * fidecorex-web-app
 *
 * @author    Jérémy GAULIN <jeremy@bnb.re>
 * @copyright 2016 - B&B Web Expertise
 */

if ( ! function_exists('menuActiveRoute')) {
    function activeMenu($routeName, $includeClass = true, $className = 'active')
    {
        return request()->is($routeName) ? ( $includeClass ? "class=\"{$className}\"" : $className ) : '';
    }
}