<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Claim
 *
 * @property integer $id
 * @property integer $cache_id
 * @property string $email
 * @property string $name
 * @property string $comment
 * @property string $feedback
 * @property string $extra
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $hidden_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereCacheId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereFeedback($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereExtra($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereHiddenAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Claim whereDeletedAt($value)
 * @mixin \Eloquent
 */
class Claim extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['hidden_at', 'deleted_at'];
}
