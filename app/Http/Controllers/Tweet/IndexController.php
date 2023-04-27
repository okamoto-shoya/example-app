<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        // $tweets = Tweet::all();
        // $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();
        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(), throw new \Error('dump report.'));
        // $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        return view('tweet.index')->with('tweets',$tweets);
        // dd($tweets);
        // return view('tweet.index', ['name' => 'laravel']);
        // return view('tweet.index')->with('name','laravel')->with('version','8');
    }
}
