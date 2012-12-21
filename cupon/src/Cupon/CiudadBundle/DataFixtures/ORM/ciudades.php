<?

// src/Cupon/CiudadBundle/DataFixtures/ORM/ciudades.php

namespace Cupon\CiudadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Cupon\CiudadBundle\Entity\Ciudad;
use Doctrine\Common\Persistence\ObjectManager;

class ciudades implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $ciudades = array(
            array('nombre' => 'Madrid', 'slug' => 'madrid'),
            array('nombre' => 'Barcelona', 'slug' => 'barcelona'),
            array('nombre' => 'Bilbao', 'slug' => 'bilbao'),
            array('nombre' => 'Sevilla', 'slug' => 'sevilla'),
            array('nombre' => 'Aranjuez', 'slug' => 'aranjuez'),
            array('nombre' => 'Murcia', 'slug' => 'murcia'),
            array('nombre' => 'Vigo', 'slug' => 'vigo'),
            array('nombre' => 'Toledo', 'slug' => 'toledo'),
            array('nombre' => 'Badajoz', 'slug' => 'badajoz'),
            array('nombre' => 'Alcalá de Henares', 'slug' => 'alcala-de-henares'),
        );
        foreach ($ciudades as $ciudad) {
            $entidad = new Ciudad();
            $entidad->setNombre($ciudad['nombre']);
            $entidad->setSlug($ciudad['slug']);

            $manager->persist($entidad);
        }
        $manager->flush();
    }

}

