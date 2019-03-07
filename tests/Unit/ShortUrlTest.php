<?php

namespace Tests\Unit;

use Tests\TestCase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\ShortUrl;

class ShortUrlTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function should_generate_an_short_url()
    {
        $data = [
            'url' => 'google.com.do'
        ];

        $this->post('/api/urls', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    /** @test */
    public function get_the_top_100_of_the_most_visited_urls () {

        $shortUrl = ['id','url','code','counter','created_at','updated_at'];
        $this->get('/api/urls')
            ->assertStatus(200)
            ->assertJsonCount(1);

    }

    /** @test */
    public function it_redirects_to_the_correct_url()
    {

        $url = ShortUrl::all()->first();
        $response = $this->get('/'.$url->code);
        $this->assertEquals($url->url, $response->headers->get('Location'));
        $this->assertEquals(302, $response->status());
    }


}
