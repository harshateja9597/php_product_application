<?php

use PHPUnit\Framework\TestCase;

require_once 'Product.php'; // Assuming the Product class is defined in Product.php

class ProductTest extends TestCase {
    public function testProductTotal() {
        // Arrange
        $product = new Product(name: 'Laptop', price: 1200.50, quantity: 2);
        
        // Act
        $total = $product->getTotal();
        
        // Assert
        $this->assertEquals(2401.00, $total);
    }
}
