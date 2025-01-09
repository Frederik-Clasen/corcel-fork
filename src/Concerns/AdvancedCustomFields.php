<?php

namespace Corcel\Concerns;

use Corcel\AdvancedCustomFields as BaseAdvancedCustomFields;

/**
 * Trait HasAcfFields
 *
 * @package Corcel\Traits
 * @author Junior Grossi <juniorgro@gmail.com>
 */
trait AdvancedCustomFields
{
    /**
     * @return BaseAdvancedCustomFields
     */
    public function getAcfAttribute()
    {
        return new BaseAdvancedCustomFields($this);
    }
}
