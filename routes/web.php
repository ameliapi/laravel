<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Faker\Factory;

class User{

}

class Tweet{

}

Route::get('/', function () {

	$faker = Factory::create();

	$user1 = new User();
	$user1->name = $faker->name;
	$user1->image = $faker->imageUrl();

	$user2 = new User();
	$user2->name = $faker->name;
	$user2->image = $faker->imageUrl();


	$tweet1 = new Tweet();
	$tweet1->user = $user1;
	$tweet1->time = date_create()->modify('-1 hour');
	$tweet1->content = $faker->text(280);

	$tweet2 = new Tweet();
	$tweet2->user = $user2;
    $tweet2->time = date_create()->modify('-3 hour');
	$tweet2->content = $faker->paragraph;

	$data = [
		'users' => [$user1, $user2],
		'tweets' => [$tweet1, $tweet2],

	];

    return view('welcome', $data);

});
