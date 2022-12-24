<?php

namespace App\controllers;

use App\Model\BookModel;

class BookController {
	public function getAllBooks(): ?array
	{
		$books = new BookModel;

		return $books->getData();
	}
	public function __construct(array $newData, string $name_book, string $author, string $category)
	{
		$newData = new BookModel;
		$newData = [];
		$name_book = 'Fathers & Childrens';
		$this->name = $name_book;
		$author = 'Turgenev Ivan Sergeyevich';
		$this->author = $author;
		$category = 'romance';
		$this->category = $category;
		array_push($newData, $name_book);
		array_push($newData, $author);
		array_push($newData, $category);
		$this->newData = $newData;
		array_push($data, $newData);
	}

	public function __construct()
	{
		unset($data['name_book']);
		unset($data['author']);
		unset($data['category']);
	}
}
