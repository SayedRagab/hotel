<?php

namespace App\Http\Data;

class Dumy
{
    function getHotels()
    {
        $image_urls = array(
            'https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1522798514-97ceb8c4f1c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8aG90ZWx8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1521783988139-89397d761dce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODR8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1590381105924-c72589b9ef3f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzF8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1573052905904-34ad8c27f0cc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njl8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1565031491910-e57fac031c41?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTN8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1584132915807-fd1f5fbc078f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDh8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1592229505726-ca121723b8ef?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDd8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1631049035326-57414e7739eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE4fHxob3RlbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1587874522487-fe10e954d035?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA1fHxob3RlbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1631049035634-c04c637651b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 'https://images.unsplash.com/photo-1572177215152-32f247303126?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
        );
        $hotels = array(
            array(
                "id" => 1,
                "name" => "Grand Hotel",
                "city" => "New York",
                "address" => "123 Main St",
                "main_image" =>  $image_urls[0],
                "images" => array($image_urls[1],  $image_urls[2]),
                "lat" => 40.730610,
                "long" => -73.935242,
                "price" => 150,
                "description" => "Grand Hotel hotel located in the heart of New York City."
            ),
            array(
                "id" => 2,
                "name" => "Luxury Suites",
                "city" => "Los Angeles",
                "address" => "456 Sunset Blvd",
                "main_image" =>  $image_urls[3],
                "images" => array($image_urls[4],  $image_urls[5]),
                "lat" => 34.052235,
                "long" => -118.243683,
                "price" => 200,
                "description" => "Luxurious hotel located in the heart of Los Angeles."
            ),
            array(
                "id" => 3,
                "name" => "Elegant",
                "city" => "City1",
                "address" => "Address1",
                "main_image" =>  $image_urls[6],
                "images" => array($image_urls[7],  $image_urls[8]),
                "lat" => 40.730610,
                "long" => -73.935242,
                "price" => 100,
                "description" => "Elegant hotel with stunning views of the Hollywood Hills."
            ),
            array(
                "id" => 4,
                "name" => "Charming",
                "city" => "Chicago",
                "address" => "Address2",
                "main_image" =>  $image_urls[9],
                "images" => array($image_urls[10],  $image_urls[11]),
                "lat" => 34.052235,
                "long" => -118.243683,
                "price" => 150,
                "description" => "Charming hotel located in the heart of Chicago's downtown."
            ),
            array(
                "id" => 5,
                "name" => "Hotel3",
                "city" => "City3",
                "address" => "Address3",
                "main_image" =>  $image_urls[12],
                "images" => array($image_urls[13],  $image_urls[14]),
                "lat" => 40.730610,
                "long" => -73.935242,
                "price" => 50,
                "description" => "Hotel3 hotel located in the heart of City3."
            )
        );
        return $hotels;
    }
}
