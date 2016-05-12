<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FideliteControllerTest extends WebTestCase
{
    public function testAjoutcarte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjoutCarte');
    }

    public function testConsultermodify()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ConsulterModify');
    }

}
