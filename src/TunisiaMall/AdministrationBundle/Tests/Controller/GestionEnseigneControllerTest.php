<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionEnseigneControllerTest extends WebTestCase
{
    public function testAjouterenseigne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjouterEnseigne');
    }

    public function testModifierenseigne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifierEnseigne');
    }

    public function testAfficherenseigne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfficherEnseigne');
    }

}
