<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionComptesControllerTest extends WebTestCase
{
    public function testValiderresponsable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ValiderResponsable');
    }

    public function testValiderclient()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ValiderClient');
    }

    public function testSupprimercompte()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerCompte');
    }

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

    public function testSupprimerpack()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerPack');
    }

    public function testDefinirzonepublicitaire()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DefinirZonePublicitaire');
    }

}
