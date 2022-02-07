<?php
namespace App\classes;
class Product
{
    protected $products=[];
    public function getAllProducts(){
        return [
            0=>[
                'name' => 'Bull tees',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p1.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 1,
            ],
            1=>[
                'name' => 'Flower',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p2.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 2,
            ],
            2=>[
                'name' => 'Who Dey',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p3.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 3,
            ],
            3=>[
                'name' => 'Thrifted',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p4.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 4,
            ],
            4=>[
                'name' => 'Led Zapplin',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p5.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 5,
            ],
            5=>[
                'name' => 'Control Freak',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p6.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 6,
            ],
            6=>[
                'name' => 'Everyone',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p7.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 7,
            ],
            7=>[
                'name' => 'Canadian Trucker',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p8.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 8,
            ],
            8=>[
                'name' => 'The Weekend',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p9.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 9,
            ],
            9=>[
                'name' => 'Superbowl',
                'price' => '10.00$',
                'brand' => 'ETSY',
                'image' => 'p10.jpg',
                'category' => 'tees',
                'description' => 'This is a good quality tee',
                'id' => 10,
            ],
        ];
    }
    public function getProductById($id){
        $this->products = $this->getAllProducts();
        foreach ($this->getAllProducts() as $product){
            if($product['id']== $id){
                return $product;
            }
        }
    }

}

