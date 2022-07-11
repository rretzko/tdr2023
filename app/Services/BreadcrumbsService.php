<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;

/**
 * Return a fully formatted string to display as breadcrumbs
 * based on Route::currentRouteName()
 */
class BreadcrumbsService
{
    private static $breadcrumbs;
    private static $countparts;
    private static $parts;
    private static $routename;

    public function __construct()
    {
        self::$breadcrumbs = '';

        self::$routename = Route::currentRouteName();

        self::$parts = explode('.', self::$routename);

        self::$countparts = count(self::$parts);

        self::makeBreadcrumbs();
    }

    public static function breadcrumbs() : string
    {
        return self::$breadcrumbs;
    }

    private function makeBreadcrumbs() : void
    {
        foreach(self::$parts AS $key => $breadcrumb){

            self::$breadcrumbs .= '<a href="'.self::makeRoute().'" >'
                .strtolower($breadcrumb)
                .'</a>'
                . self::makeSuffix();
        }
    }

    /**
     * return increasingly detailed routes to breadcrumb
     * @return string
     */
    private function makeRoute() : string
    {
        static $cntr = 0;

        $route = '/';

        for($i=0; $i <= $cntr; $i++){

            $route .= (array_key_exists($i, self::$parts)) ?  self::$parts[$i].'/' : '';
        }

        $cntr++;

        return $route;
    }

    /**
     * add ' ... ' suffix to all but the last breadcrumb
     * @return string
     */
    private function makeSuffix() : string
    {
        static $cntr = 1;

        $suffix = ($cntr == self::$countparts) ? '' : ' ... ';

        $cntr++;

        return $suffix;
    }
}
