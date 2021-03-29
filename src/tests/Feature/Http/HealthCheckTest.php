<?php

namespace Tests\Feature\Http;

use Tests\TestCase;

/**
 * Class HealthCheckTest
 * @package Tests\Feature\Http
 */
class HealthCheckTest extends TestCase
{
    /**
     * @noinspection NonAsciiCharacters
     * @test
     */
    public function ヘルスチェックすると200が返る()
    {
        $response = $this->get('/health-check');
        $response->assertStatus(200);
    }
}
