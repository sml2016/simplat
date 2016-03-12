<?php

/**
 * Set active page
 *
 * @param string $uri
 * @return string
 */
function set_active($uri, $className = 'active')
{
    return Request::is($uri) ? $className : '';
}
