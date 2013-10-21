<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Web
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Web\Response;

/**
 * 
 * @todo Add the following:
 * 
 * Cache-Control -- tells all caching mechanisms from server to client whether
 * they may cache this object. It is measured in seconds.
 * Cache-Control: max-age=3600 Permanent
 * 
 * Expires -- gives the date/time after which the response is considered
 * stale.
 * Expires: Thu, 01 Dec 1994 16:00:00 GMT 
 * 
 * Last-Modified -- The last modified date for the requested object, in RFC
 * 2822 format.
 * Last-Modified: Tue, 15 Nov 1994 12:45:26 GMT
 * 
 * Vary -- tells downstream proxies how to match future request headers to
 * decide whether the cached response can be used rather than requesting a
 * fresh one from the origin server.
 * 
 */
class Cache
{
    /**
     * 
     * Should the response disable HTTP caching?
     * 
     * @var bool
     * 
     */
    protected $disabled = false;

    /**
     * 
     * Should the response disable HTTP caching?
     * 
     * @param bool $disable When true, disable HTTP caching.
     * 
     * @return void
     * 
     */
    public function disable($disabled = true)
    {
        $this->disabled = (bool) $disabled;
    }

    /**
     * 
     * Is caching turned off?
     * 
     * @return bool
     * 
     */
    public function isDisabled()
    {
        return $this->disabled;
    }
}
