<?php

namespace App\Http\Controllers;

use App\Http\Requests\TweetRegisterRequest;
use App\Services\TweetService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Inertia\Response;

class TweetController extends Controller
{
    private $TweetService;

    /**
     * __construct
     */
    public function __construct(TweetService $TweetService)
    {
        $this->TweetService = $TweetService;
    }

    public function index(): Response
    {
        return Inertia::render('Tweet/Register');
    }

    public function register(TweetRegisterRequest $request): Response
    {
        $postData = [
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'tweet_flg' => true,
        ];

        // ツイート内容をデータベースに保存
        try {
            $this->TweetService->createTweetData($postData);
        } catch (Exception $e) {
            Log::error($e);

            // todo エラー画面表示
        }

        // todo ツイート一覧にリダイレクト
        return Inertia::render('Tweet/Register');
    }
}
