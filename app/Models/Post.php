<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'seo_title',
        'seo_description',
        'heading',
        'body',
    ];

    public function user(){
        return $this->belongsTo('user_id');
    }

}
