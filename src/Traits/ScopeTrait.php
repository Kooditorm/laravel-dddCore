<?php

namespace DDDCore\Traits;


/**
 * @trait ScopeTrait
 * @package DDDCore\Traits
 */
trait ScopeTrait
{

    protected function userScope($query)
    {
        return $query;
    }
}
