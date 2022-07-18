<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    protected $fillable = [
        'article_id',
        'name',
        'comment',
    ];

    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
