<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_resource_download_links_are_real_routes(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(route('resources.download', 'introduction-to-computer-science'));

        $download = $this->get(route('resources.download', 'introduction-to-computer-science'));

        $download->assertStatus(200);
        $this->assertStringStartsWith('text/plain', $download->headers->get('Content-Type'));
        $download->assertSee('Introduction to Computer Science');
    }
}
