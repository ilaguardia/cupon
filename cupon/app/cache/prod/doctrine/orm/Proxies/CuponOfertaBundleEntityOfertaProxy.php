<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CuponOfertaBundleEntityOfertaProxy extends \Cupon\OfertaBundle\Entity\Oferta implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setCondiciones($condiciones)
    {
        $this->__load();
        return parent::setCondiciones($condiciones);
    }

    public function getCondiciones()
    {
        $this->__load();
        return parent::getCondiciones();
    }

    public function setFoto($foto)
    {
        $this->__load();
        return parent::setFoto($foto);
    }

    public function getFoto()
    {
        $this->__load();
        return parent::getFoto();
    }

    public function setPrecio($precio)
    {
        $this->__load();
        return parent::setPrecio($precio);
    }

    public function getPrecio()
    {
        $this->__load();
        return parent::getPrecio();
    }

    public function setDescuento($descuento)
    {
        $this->__load();
        return parent::setDescuento($descuento);
    }

    public function getDescuento()
    {
        $this->__load();
        return parent::getDescuento();
    }

    public function setFechaPublicacion($fechaPublicacion)
    {
        $this->__load();
        return parent::setFechaPublicacion($fechaPublicacion);
    }

    public function getFechaPublicacion()
    {
        $this->__load();
        return parent::getFechaPublicacion();
    }

    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->__load();
        return parent::setFechaExpiracion($fechaExpiracion);
    }

    public function getFechaExpiracion()
    {
        $this->__load();
        return parent::getFechaExpiracion();
    }

    public function setCompras($compras)
    {
        $this->__load();
        return parent::setCompras($compras);
    }

    public function getCompras()
    {
        $this->__load();
        return parent::getCompras();
    }

    public function setUmbral($umbral)
    {
        $this->__load();
        return parent::setUmbral($umbral);
    }

    public function getUmbral()
    {
        $this->__load();
        return parent::getUmbral();
    }

    public function setRevisada($revisada)
    {
        $this->__load();
        return parent::setRevisada($revisada);
    }

    public function getRevisada()
    {
        $this->__load();
        return parent::getRevisada();
    }

    public function setCiudad(\Cupon\CiudadBundle\Entity\Ciudad $ciudad)
    {
        $this->__load();
        return parent::setCiudad($ciudad);
    }

    public function getCiudad()
    {
        $this->__load();
        return parent::getCiudad();
    }

    public function setTienda(\Cupon\TiendaBundle\Entity\Tienda $tienda)
    {
        $this->__load();
        return parent::setTienda($tienda);
    }

    public function getTienda()
    {
        $this->__load();
        return parent::getTienda();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'slug', 'descripcion', 'condiciones', 'foto', 'precio', 'descuento', 'fecha_publicacion', 'fecha_expiracion', 'compras', 'umbral', 'revisada', 'ciudad', 'tienda');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}