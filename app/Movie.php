<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $movie_poster
 * @property string $movie_poster_path
 * @property string $movie_title
 * @property string $movie_year
 * @property string $movie_genre
 * @property string $movie_synopsis
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class Movie extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['movie_poster', 'movie_poster_path', 'movie_title', 'movie_year', 'movie_genre', 'movie_synopsis', 'remember_token', 'created_at', 'updated_at'];

}
