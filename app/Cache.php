<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Cache
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property float $latitude
 * @property float $longitude
 * @property string $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cache whereDeletedAt($value)
 * @mixin \Eloquent
 */
class Cache extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
}
