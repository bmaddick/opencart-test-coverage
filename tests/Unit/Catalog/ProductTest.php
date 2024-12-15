<?php

namespace Tests\Unit\Catalog;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic test example to verify PHPUnit setup.
     *
     * @return void
     */
    public function testProductClassExists()
    {
        $this->assertTrue(
            class_exists('Opencart\Catalog\Model\Catalog\Product'),
            'Product class should exist in the OpenCart catalog'
        );
    }
}
