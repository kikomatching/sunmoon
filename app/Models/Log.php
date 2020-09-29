<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasUUID;
use Carbon\Carbon;

class Log extends Model
{
    use HasUUID;

    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'log_id';
    protected $guarded = [];

    /**
     * Accessor for timestamp column
     *
     * @param Carbon $value
     * @return string
     */
    public function getTimestampAttribute($value)
    {
        return date('Y-m-d h:i:s', $value);
    }

    /**
     * Accessor for log_type column
     *
     * @param string $value
     * @return string
     */
    public function getLogTypeAttribute($value)
    {
        return ucfirst($value);
    }
}
