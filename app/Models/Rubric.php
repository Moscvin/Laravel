<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * Class Rubric
 * @package App
 * @mixin Builder
 */
class Rubric extends Model
{
    //$rubric = Rubric::find(1);
    public function posts(){
        return $this->hasMany(Post::class);
        // return $this->hasOne(Post::class);
    }
}
