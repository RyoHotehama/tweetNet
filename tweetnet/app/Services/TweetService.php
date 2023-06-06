<?php

namespace App\Services;

use App\Repository\TweetRepository;
use Exception;

class TweetService
{
    private $TweetRepository;

    /**
     * __construct
     */
    public function __construct(TweetRepository $TweetRepository)
    {
        $this->TweetRepository = $TweetRepository;
    }

    /**
     * ツイート内容をデータベースに保存
     *
     * @param  array $data データベース登録用データ
     * @return void
     */
    public function createTweetData(array $data)
    {
        try {
            $this->TweetRepository->create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
