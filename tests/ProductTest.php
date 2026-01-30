<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class ProductTest extends ApiTestCase
{
    public function testProducts(): void
    {
        static::$alwaysBootKernel = false;

        $client = static::createClient();

        // create
        $response = $client->request('POST', '/api/products', [
            'json' => ['name' => 'name', 'price' => "100"],
            'headers' => [
                'content-type' => 'application/ld+json',
            ],
        ]);
        $this->assertResponseIsSuccessful();
        //$this->assertResponseHeaderSame('content-type', 'application/ld+json');
        $productId = $response->toArray()['id'];
        //$this->assertArrayHasKey($key, $array)
        $this->assertJsonContains(['name' => 'name']);

        // get by id
        $client->request('GET', '/api/products/' . $productId);
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['name' => 'name']);

        // list
        $client->request('GET', '/api/products');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains(['member' => []]);
        
        // delete
        $response = $client->request('DELETE', '/api/products/' . $productId);
        $this->assertResponseIsSuccessful();
    }
}
