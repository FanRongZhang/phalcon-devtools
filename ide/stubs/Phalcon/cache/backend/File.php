<?php

namespace Phalcon\Cache\Backend;

/**
 * Phalcon\Cache\Backend\File
 * Allows to cache output fragments using a file backend
 * <code>
 * use Phalcon\Cache\Backend\File;
 * use Phalcon\Cache\Frontend\Output as FrontOutput;
 * // Cache the file for 2 days
 * $frontendOptions = [
 * 'lifetime' => 172800
 * ];
 * // Create a output cache
 * $frontCache = FrontOutput($frontOptions);
 * // Set the cache directory
 * $backendOptions = [
 * 'cacheDir' => '../app/cache/'
 * ];
 * // Create the File backend
 * $cache = new File($frontCache, $backendOptions);
 * $content = $cache->start('my-cache');
 * if ($content === null) {
 * echo '<h1>', time(), '</h1>';
 * $cache->save();
 * } else {
 * echo $content;
 * }
 * </code>
 */
class File extends \Phalcon\Cache\Backend implements \Phalcon\Cache\BackendInterface
{
    /**
     * Default to false for backwards compatibility
     *
     * @var boolean
     */
    private $_useSafeKey = false;


    /**
     * Phalcon\Cache\Backend\File constructor
     *
     * @param mixed $frontend 
     * @param array $options 
     */
    public function __construct(\Phalcon\Cache\FrontendInterface $frontend, array $options) {}

    /**
     * Returns a cached content
     *
     * @param string $keyName 
     * @param int $lifetime 
     * @return mixed|null 
     */
    public function get($keyName, $lifetime = null) {}

    /**
     * Stores cached content into the file backend and stops the frontend
     *
     * @param int|string $keyName 
     * @param string $content 
     * @param int $lifetime 
     * @param boolean $stopBuffer 
     * @return bool 
     */
    public function save($keyName = null, $content = null, $lifetime = null, $stopBuffer = true) {}

    /**
     * Deletes a value from the cache by its key
     *
     * @param int|string $keyName 
     * @return boolean 
     */
    public function delete($keyName) {}

    /**
     * Query the existing cached keys
     *
     * @param string|int $prefix 
     * @return array 
     */
    public function queryKeys($prefix = null) {}

    /**
     * Checks if cache exists and it isn't expired
     *
     * @param string|int $keyName 
     * @param int $lifetime 
     * @return boolean 
     */
    public function exists($keyName = null, $lifetime = null) {}

    /**
     * Increment of a given key, by number $value
     *
     * @param string|int $keyName 
     * @param int $value 
     * @return mixed 
     */
    public function increment($keyName = null, $value = 1) {}

    /**
     * Decrement of a given key, by number $value
     *
     * @param string|int $keyName 
     * @param int $value 
     * @return mixed 
     */
    public function decrement($keyName = null, $value = 1) {}

    /**
     * Immediately invalidates all existing items.
     *
     * @return bool 
     */
    public function flush() {}

    /**
     * Return a file-system safe identifier for a given key
     *
     * @param mixed $key 
     * @return string 
     */
    public function getKey($key) {}

    /**
     * Set whether to use the safekey or not
     *
     * @param bool $useSafeKey 
     * @return File 
     */
    public function useSafeKey($useSafeKey) {}

}
