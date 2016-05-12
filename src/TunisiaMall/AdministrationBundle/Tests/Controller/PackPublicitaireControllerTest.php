<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PackPublicitaireControllerTest extends WebTestCase
{
    public function testCreerpack()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CreerPack');
    }

    public function testModifierpack()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifierPack');
    }

    public function testSupprimer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Supprimer');
    }

    public function testDefinirzonepublicitaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DefinirZonePublicitaire');
    }

}
