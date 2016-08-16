<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Product;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadProduct implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $products = [
            'iPhone 6',
            'Samsung Galaxy S6',
            'Xiaomi RedMi 3',
            'iPhone 6s',
            'Nokia Lumia',
            'HTC One M8',
            'LG Optimus G',
            'Samsung 4K 32 inch',
            'Sony 4K 32 inch',
            'LG 4K 32 inch',
            'Panasonic 4K 32 inch',
            'Xiaomi 4K 32 inch',
            'Sony 4K 40 inch',
            'Samsung 4K 4- inch',
        ];

        for ($i = 0; $i < 14; ++$i) {
            $product = new Product();
            $product->setName($products[$i]);
            $manager->persist($product);
        }

        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null)
    {
        // TODO: Implement setContainer() method.
        $this->container = $container;
    }

    public function getOrder()
    {
        return 2;
    }
}
