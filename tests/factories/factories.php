<?php 

/*$factory('\App\ArticleTag', [
	'article_id' => 'factory:\App\Article',
	'tag_id' => 'factory:\App\Tag'
]);*/



$factory('\App\Article', [
	'user_id' => 'factory:\App\User',
	'title' => $faker->sentence,
	'slug' => $faker->slug,
	'post' => $faker->text(1000),
	'published_at' => $faker->date('Y-m-d', 'now')
]);

$factory('\App\User', [
	'name' => $faker->name,
	'email' => $faker->email,
	'password' => $faker->password
]);

$factory('\App\Tag', [
	'name' => $faker->word
]);