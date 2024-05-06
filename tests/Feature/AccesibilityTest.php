<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccesibilityTest extends TestCase
{
    public function test_topics(): void
    {
        $response = $this->get('/topics');

        $response->assertStatus(200);
    }
    public function test_steps(): void
    {
        $response = $this->get('/steps');

        $response->assertStatus(200);
    }
    public function test_texts(): void
    {
        $response = $this->get('/texts');

        $response->assertStatus(200);
    }
    public function test_questions(): void
    {
        $response = $this->get('/questions');

        $response->assertStatus(200);
    }
    public function test_answers(): void
    {
        $response = $this->get('/answers');

        $response->assertStatus(200);
    }
    public function test_answers_non_existent(): void
    {
        $response = $this->get('/answers/15');

        $response->assertStatus(404);
    }
}
