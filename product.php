<?php 

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
       
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
    private function getFormattedPrice()
    {
        return sprintf("$%.2f",$this->price);

         
    }

    public   function showDetails()
    {
        
         print "Product Details:\n";
         printf("ID : %d\n",$this->id);
         printf("Name : %s\n",$this->name);
         printf("Price : %s\n",$this->getFormattedPrice());

        
    }
}

$product = new Product(1, 'T-shirt', 19.99);
 $product->showDetails();





?>