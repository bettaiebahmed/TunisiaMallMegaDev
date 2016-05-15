<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionPromotionControllerTest extends WebTestCase
{
    public function testAjouterpromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjouterPromotion');
    }

    public function testConsulterpromotion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ConsulterPromotion');
    }

}
