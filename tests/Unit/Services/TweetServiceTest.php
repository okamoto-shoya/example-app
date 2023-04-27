<?php

namespace Tests\Unit\Services;

use Mockery;
use PHPUnit\Framework\TestCase;
// use Tests\TestCase;
use App\Services\TweetService;
// use TextUI\Configuration\Registry;
// use PHPUnit\TextUI\Configuration\Registry;


class TweetServiceTest extends TestCase
{
    /**
     * @return void
     */
    public function test_check_own_tweet(): void
    {

        $tweetService = new TweetService();

        $mock = Mockery::mock('alias:App\Models\Tweet');
        $mock->shouldReceive('where->first')->andReturn((object)[
            'id' => 1,
            'user_id' => 1
        ]);

        $result = $tweetService->checkOwnTweet(1, 1);
        $this->assertTrue(true);

        $result = $tweetService->checkOwnTweet(2, 1);
        $this->assertFalse($result);
    }
}
