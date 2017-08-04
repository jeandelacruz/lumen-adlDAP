<?php
/**
 * Created by PhpStorm.
 * User: jdelacruz
 * Date: 2/08/2017
 * Time: 12:17 PM
 */
if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}