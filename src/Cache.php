<?php

namespace Halfpetal\Onoi\Illuminate;

use Illuminate\Cache\Repository;
use Onoi\Cache\Cache as OnoiCache;

class Cache implements OnoiCache
{
    /**
     * Illuminate cache repository.
     *
     * @var \Illuminate\Cache\Repository
     */
    private $cache = null;

    /**
     * Constructor for the Illuminate Cache driver.
     *
     * @param Repository $cache
     */
    public function __construct(Repository $cache)
    {
        $this->cache = $cache;
    }

    /**
     * {@inheritDoc}
     */
    public function fetch($id)
    {
        return $this->cache->get($id);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($id)
    {
        return $this->cache->has($id);
    }

    /**
     * {@inheritDoc}
     */
    public function save($id, $data, $ttl = 0)
    {
        $this->cache->save($id, $data, $ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($id)
    {
        return $this->cache->forget($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getStats()
    {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return __CLASS__ . '::' . get_class($this->cache);
    }
}