<?php

namespace App\controllers;

use App\Model\BookModel;

class BookController {
	public function getAllBooks(): ?array
	{
		$books = new BookModel;

		return $books->getData();
	}

	public function __construct(protected $newData)
	{
		$newData = new BookModel;
		$newData = [];
		
	}

	public function __construct(protected $deleteData)
	{
		
	}
}
