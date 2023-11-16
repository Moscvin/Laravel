<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primarykey = 'post_id';
    public $incrementing = false; 
        protected $keyType = 'string';
        public $timestamps = false;
        protected $attributes = [
            'content' => 'vlad este ',
        ];

        public function rubric(){
            return $this->belongsTo(Rubric::class);
        }
        public function tags(){
            return $this->belongsToMany(Tag::class);
        }
            public function getPost(){
                return Carbon::parse($this->created_at)->diffForHumans();
            }
    use HasFactory;
}
