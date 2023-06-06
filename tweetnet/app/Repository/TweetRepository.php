<?php

namespace App\Repository;

use App\Models\Tweet;
use App\Traits\commonScope;

class TweetRepository
{
    use commonScope;

    private $Tweet;

    /**
     * __construct
     */
    public function __construct(Tweet $Tweet)
    {
        $this->Tweet = $Tweet;
    }

    /**
     * @param  array $data データベース登録用データ
     * @return void
     */
    public function create(array $data): void
    {
        $this->Tweet::create($data);
    }
}
