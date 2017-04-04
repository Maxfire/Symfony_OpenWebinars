<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Created by PhpStorm.
 * User: selvira
 * Date: 31/03/17
 * Time: 20:13
 *
 * @ORM\Entity
 * @ORM\Table(name="productos")
 */

class Productos
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    protected $nombre;

    protected $precio;

    protected $descripcion;


    protected $fecha;


}