<?php

use Faker\Generator as Faker;
use App\Element;

$factory->define(Element::class, function (Faker $faker) {
	$title = $faker->sentence(3);
    return [
    	'name'		=> $title,
    	'body'		=> $faker->text(200),	
    	'short'		=> $faker->text(80),
       	
    ];
});
