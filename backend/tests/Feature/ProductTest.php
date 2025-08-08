<?php

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function test_fillable_has_name(): void
    {
        $product = new Product();
        $this->assertContains('name', $product->getFillable());
    }
}
