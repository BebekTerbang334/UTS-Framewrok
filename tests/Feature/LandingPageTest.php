<?php

namespace Tests\Feature;

use App\Models\Album;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_shows_albums_from_the_database_in_order(): void
    {
        Album::factory()->create(['artist' => 'Hindia', 'track' => 'Membasuh', 'position' => 2]);
        Album::factory()->create(['artist' => 'Queen', 'track' => 'Bohemian Rhapsody', 'position' => 1]);

        $response = $this->get(route('landing'));

        $response->assertOk();
        $response->assertViewIs('landing');
        $response->assertSeeInOrder(['Queen', 'Bohemian Rhapsody', 'Hindia', 'Membasuh']);
    }

    public function test_landing_page_renders_without_albums(): void
    {
        $response = $this->get(route('landing'));

        $response->assertOk();
        $response->assertSee('Dengarkan yang paling', false);
    }
}
