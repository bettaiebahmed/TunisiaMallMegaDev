<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CarteFideliteControllerTest extends WebTestCase
{
    public function testAjoutcarte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjoutCarte');
    }

    public function testModifiercarte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifierCarte');
    }

}
