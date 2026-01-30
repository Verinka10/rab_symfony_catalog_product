<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

//TODO use ApiWebTestCase (not work composer install)
class ProductTest extends WebTestCase
{
    public function testProducts(): void
    {
        $client = static::createClient([], [
            'HTTP_HOST' => '127.0.0.1:40558',
        ]);
        $response = $client->jsonRequest('POST', '/api/product', ['name' => 'name', 'price' => 100]);
        $this->assertResponseIsSuccessful();

        $response = $client->jsonRequest('GET', '/api/products');
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertJson($client->getResponse()->getContent());
    }
}
