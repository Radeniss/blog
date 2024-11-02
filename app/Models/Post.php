<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
