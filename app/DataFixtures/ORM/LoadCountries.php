<?php

namespace DataFixtures\ORM;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Country;











class LoadCountries extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $get_data = callAPI('GET', 'https://api.example.com/get_url/'.$user['User']['customer_id'], false);
        $response = json_decode($get_data, true);
        $errors = $response['response']['errors'];
        $data = $response['response']['data'][0];

        // create 20 products! Bam!

        //for ($i = 0; $i < 20; $i++) {
            $country = new Country();
            $country->setCountry('Venezuela');
            //$country->setCountry('country '.$i);
            $manager->persist($country);
        //}

        $manager->flush();
    }
}