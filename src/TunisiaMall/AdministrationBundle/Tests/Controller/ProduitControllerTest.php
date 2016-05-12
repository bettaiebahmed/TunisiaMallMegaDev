<?php

namespace TunisiaMall\AdministrationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    public function testAjouterproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterProduit');
    }

    public function testAfficherproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfficherProduit');
    }

    public function testModifierarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifierArticle');
    }

    public function testSupprimerarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerArticle');
    }

    public function testRecherchearticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/RechercheArticle');
    }

    public function testResultat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/resultat');
    }

}
