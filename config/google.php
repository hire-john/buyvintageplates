<?php
return [
	
	'keys' => [
		'books' => env('GOOGLE_BOOKS_API_KEY','default'),
	],

	'apis' => [
		'books_v1' => [
			'endpoint' => 'https://www.googleapis.com/books/v1/',
			'volumes' => 'https://www.googleapis.com/books/v1/volumes/',
			'isbn_query' => 'https://www.googleapis.com/books/v1/volumes?q=isbn:',
		]
	],
	
];
