<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title', 'description'];
    protected $guarded = ['id'];
}
