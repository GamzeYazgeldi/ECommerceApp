<?php

class Db
{
    // creating resultant array
    public static $list = [
        '1' => [
            'id' => 1, 'name' => 'Iphone XS', 'price' => 100.00, 'currency' => 'TRY', 'status' => 1,
            'cpu' => 'X', 'ram' => 128, 'screenSize' => '1920x1080', 'category' => 'cellphone'
        ],
        '2' => [
            'id' => 2, 'name' => 'Samsung A51', 'price' => 90.25, 'currency' => 'TRY', 'status' => 1,
            'cpu' => 'Y', 'ram' => 256, 'screenSize' => '1920x1080', 'category' => 'cellphone'

        ],
        '3' => [
            'id' => 3, 'name' => 'Wiskas Cat Feed', 'price' => 240.5, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 2500, 'packageType' => 'A',
            'category' => 'animalFood', 'subCategory' => 'cat'

        ],
        '4' => [
            'id' => 4, 'name' => 'Wiskas Dog Dry Feed', 'price' => 125.75, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 5000, 'packageType' => 'B',
            'category' => 'animalFood', 'subCategory' => 'dog', 'raceType' => 'small'

        ],
        '5' => [
            'id' => 5, 'name' => 'Wiskas Dog Dry Feed Premium', 'price' => 125.75, 'currency' => 'TRY', 'status' => 1,
            'foodType' => 'dry', 'weight' => 5000, 'packageType' => 'B',
            'category' => 'animalFood', 'subCategory' => 'dog', 'raceType' => 'big'
        ],
        '6' => [
            'id' => 6, 'name' => 'Friends Cupa', 'price' => 23.99, 'currency' => 'TRY', 'status' => 1,
            'color' => 'Green', 'category' => 'kitchen'
        ],

        '7' => [
            'id' => 7, 'name' => 'Friends Sweat', 'price' => 79.99, 'currency' => 'TRY', 'status' => 1,
            'color' => 'Gray', 'category' => 'clothes'
        ]

    ];
    
    // when user select any id on behalf of relevant product (post - get)
    // id is returned in here to index location
    public function get()
    {
        // foreach ile dön
        // id kolonu gelen ile aynı ise o satırı dön
       

    }


    public function all()
    {
        // tüm arrayi dön
    }
}

