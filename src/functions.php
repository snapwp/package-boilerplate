<?php
/**
 * Include any functions to introduce to the theme here.
 *
 * Note that this file is manually included in the Example_Service_Provider instead of required by composer.
 * This is because this file should only be included if the package is active and not just because the package is
 * present.
 *
 * @package Snap\Package
 */

if (! \function_exists('example_function')) {
    /**
     * Placeholder basic function.
     *
     * @since  1.0.0
     * @return string
     */
    function example_function()
    {
        return 'FooBar';
    }
}