<?php
use Faker\Generator as Faker;
use App\Customer;


 $factory->define(Customer::class, function (Faker $faker) {
     return[
         'date'=> $faker->dateTime,
         'location' => $faker->state,
         'first_name'=> $faker->firstName,
         'last_name' => $faker->lastName,
         'problem_description'=> $faker->text($maxNbChars = 350),
         'service' => $faker->text,
         'phone_number'=>$faker->phoneNumber,

     ];
 });
