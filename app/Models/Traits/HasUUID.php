<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUUID
{
    /**
     * Automatically generate UUID when creating new record.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($log) {
            $log->{$log->getKeyName()} = (string) Str::uuid();
        });
    }
}