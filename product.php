<?php

// Define a class using constructor property promotion
class Product {
    public function __construct(
        public string $name,
        public float $price,
        public int $quantity = 1,
    ) {}
    
    // Method to calculate total price
    public function getTotal(): float {
        return $this->price * $this->quantity;
    }
}

// Create an instance of the Product class
$product = new Product(name: 'Laptop', price: 1200.50, quantity: 2);

// Output product details and total price
echo "Product: {$product->name}\n";
echo "Price: {$product->price}\n";
echo "Quantity: {$product->quantity}\n";
echo "Total: {$product->getTotal()}\n";
