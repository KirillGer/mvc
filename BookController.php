<?php

namespace App\controllers;

use App\Model\BookModel;

class BookController {
	public function getAllBooks(): ?array
	{
		$books = new BookModel;

		return $books->getData();
	}

	public function addBook() 
	{
		array_push($data, "Childrens & Fathers", "Ivan Turgenev", "romance");
	}

	public function deleteBook()
	{
		array_diff($data, ["War & Peace", "Lev Tolstoi", "antiutopy"]);
	}
}