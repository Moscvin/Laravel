<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Country
 * @package App
 * @mixin Builder
 */
class Country extends Model
{
   
    protected $primaryKey = 'Code';
    public $incrementing = false;
    public $keyType =  'string';
    protected $table ='country';
    use HasFactory;
}
