<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Topic;

class CreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_topics_creation(): void
    {
        $topic = Topic::factory()->create([
            'id' => 134,
            'courseName' => 'Tenth'
        ]);

        $response = $this->get('/topics/10');

        $response->assertStatus(200);

        $topic->delete();
    }

    public function test_topic_deletion()
    {
        $topic = Topic::factory()->create();

        $this->assertDatabaseHas('topics', [
            'id' => $topic->id,
            'courseName' => $topic->courseName,
            'favouritesNumber' => $topic->favouritesNumber,
        ]);

        $topic->delete();


        $this->assertDatabaseMissing('topics', [
            'id' => $topic->id,
        ]);
    }

}
