<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RouteMetadata extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'route_metadata';
    protected $fillable = [
        'scope',
        'title',
        'route',
        'keywords',
        'subtitle',
        'author',
        'description',
        'generator',
        'blurb',
        'twitter_site',
        'twitter_creator',
        'twitter_card',
        'og_title',
        'og_image',
        'og_url',
        'og_type',
        'og_audio',
        'og_description',
        'og_determiner',
        'og_locale',
        'og_site_name',
        'og_video'
    ];

}
