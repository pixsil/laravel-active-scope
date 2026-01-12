<?php

namespace App\Traits;

use App\Scopes\ActiveScope;

trait ActiveTrait
{
    protected static function bootActiveTrait(): void
    {
        static::addGlobalScope(new ActiveScope);
    }
}
