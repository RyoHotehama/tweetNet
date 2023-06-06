<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $table = 'tweets';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'comment', 'reply_id', 'tweet_flg'];
}
