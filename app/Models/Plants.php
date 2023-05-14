<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plant';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'nid';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'author' => '',
        'genus' => '',
        'species' => '',
        'title' => '',
        'published_place' => '',
        'published_in' => '',
        'published_year' => '',
        'original_in' => '',
        'notes' => '',
    ];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'author',
        'genus',
        'species',
        'title',
        'published_place',
        'published_in',
        'published_year',
        'original_in',
        'notes',
    ];

}
