<?php

namespace Cupon\CiudadBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\CiudadBundle\Entity\Ciudad;

class Ciudades implements FixtureInterface
{

    public function getOrder()
    {
        return 10;
    }

    public function load(ObjectManager $manager)
    {
        $ciudades = array(
            array('id' => '1', 'nombre' => 'Alava', 'slug' => 'alava'),
            array('id' => '2', 'nombre' => 'Albacete', 'slug' => 'albacete'),
            array('id' => '3', 'nombre' => 'Alicante', 'slug' => 'alicante'),
            array('id' => '4', 'nombre' => 'Almería', 'slug' => 'almeria'),
            array('id' => '5', 'nombre' => 'Avila', 'slug' => 'avila'),
            array('id' => '6', 'nombre' => 'Badajoz', 'slug' => 'badajoz'),
            array('id' => '7', 'nombre' => 'Illes Baleares', 'slug' => 'baleares'),
            array('id' => '8', 'nombre' => 'Barcelona', 'slug' => 'barcelona'),
            array('id' => '9', 'nombre' => 'Burgos', 'slug' => 'burgos'),
            array('id' => '10', 'nombre' => 'Cáceres', 'slug' => 'caceres'),
            array('id' => '11', 'nombre' => 'Cádiz', 'slug' => 'cadiz'),
            array('id' => '12', 'nombre' => 'Cástellón', 'slug' => 'castellon'),
            array('id' => '13', 'nombre' => 'Ciudad Real', 'slug' => 'ciudad-real'),
            array('id' => '14', 'nombre' => 'Córdoba', 'slug' => 'cordoba'),
            array('id' => '15', 'nombre' => 'A Coruña', 'slug' => 'coruna'),
            array('id' => '16', 'nombre' => 'Cuenca', 'slug' => 'cuenca'),
            array('id' => '17', 'nombre' => 'Girona', 'slug' => 'girona'),
            array('id' => '18', 'nombre' => 'Granada', 'slug' => 'granada'),
            array('id' => '19', 'nombre' => 'Guadalajara', 'slug' => 'guadalajara'),
            array('id' => '20', 'nombre' => 'Guipuzcoa', 'slug' => 'guipuzcoa'),
            array('id' => '21', 'nombre' => 'Huelva', 'slug' => 'huelva'),
            array('id' => '22', 'nombre' => 'Huesca', 'slug' => 'huesca'),
            array('id' => '23', 'nombre' => 'Jaén', 'slug' => 'jaen'),
            array('id' => '24', 'nombre' => 'León', 'slug' => 'leon'),
            array('id' => '25', 'nombre' => 'Lleida', 'slug' => 'lleida'),
            array('id' => '26', 'nombre' => 'La Rioja', 'slug' => 'rioja'),
            array('id' => '27', 'nombre' => 'Lugo', 'slug' => 'lugo'),
            array('id' => '28', 'nombre' => 'Madrid', 'slug' => 'madrid'),
            array('id' => '29', 'nombre' => 'Málaga', 'slug' => 'malaga'),
            array('id' => '30', 'nombre' => 'Murcia', 'slug' => 'murcia'),
            array('id' => '31', 'nombre' => 'Navarra', 'slug' => 'navarra'),
            array('id' => '32', 'nombre' => 'Ourense', 'slug' => 'ourense'),
            array('id' => '33', 'nombre' => 'Asturias', 'slug' => 'asturias'),
            array('id' => '34', 'nombre' => 'Palencia', 'slug' => 'palencia'),
            array('id' => '35', 'nombre' => 'Las Palmas', 'slug' => 'palmas'),
            array('id' => '36', 'nombre' => 'Pontevedra', 'slug' => 'pontevedra'),
            array('id' => '37', 'nombre' => 'Salamanca', 'slug' => 'salamanca'),
            array('id' => '38', 'nombre' => 'Santa Cruz de Tenerife', 'slug' => 'santa-cruz-de-tenerife'),
            array('id' => '39', 'nombre' => 'Cantabria', 'slug' => 'cantabria'),
            array('id' => '40', 'nombre' => 'Segovia', 'slug' => 'segovia'),
            array('id' => '41', 'nombre' => 'Sevilla', 'slug' => 'sevilla'),
            array('id' => '42', 'nombre' => 'Soria', 'slug' => 'soria'),
            array('id' => '43', 'nombre' => 'Tarragona', 'slug' => 'tarragona'),
            array('id' => '44', 'nombre' => 'Teruel', 'slug' => 'teruel'),
            array('id' => '45', 'nombre' => 'Toledo', 'slug' => 'toledo'),
            array('id' => '46', 'nombre' => 'Valencia', 'slug' => 'valencia'),
            array('id' => '47', 'nombre' => 'Valladolid', 'slug' => 'valladolid'),
            array('id' => '48', 'nombre' => 'Vizcaya', 'slug' => 'vizcaya'),
            array('id' => '49', 'nombre' => 'Zamora', 'slug' => 'zamora'),
            array('id' => '50', 'nombre' => 'Zaragoza', 'slug' => 'zaragoza'),
            array('id' => '51', 'nombre' => 'Ceuta', 'slug' => 'ceuta'),
            array('id' => '52', 'nombre' => 'Melilla', 'slug' => 'melilla'),
        );
        foreach ($ciudades as $ciudad) {
            $entidad = new Ciudad();
            $entidad->setId($ciudad['id']);
            $entidad->setNombre($ciudad['nombre']);
            /* $entidad->setSlug($ciudad['slug']); */
            $manager->persist($entidad);
        }
        $manager->flush();
    }

}

