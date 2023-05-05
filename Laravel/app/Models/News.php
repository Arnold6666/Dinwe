<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $keytype = 'int';
    public $timestamps = false;

    protected $fillable = [
        'resturant_id',
        'resturant_name',
        'image',
        'title',
        'subtitle',
        'text',
        'created_at',
        'updated_at',
        'state',
    ];
}
