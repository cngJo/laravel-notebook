<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * @package App
 * @mixin Eloquent
 */
class Note extends Model
{
    public function user()
    {
        $this->hasOne(User::class);
    }
}
