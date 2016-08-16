<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 8/15/16
 * Time: 6:42 PM.
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
{

    protected $id;

    /**
     * @var string
     *
     */
    protected $name;

    /**
     * @var string
     *
     */
    protected $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \AppBundle\Entity\Product $products
     */
    public function addProducts(\AppBundle\Entity\Product $products)
    {
        $this->products[] = $products;
    }
}
