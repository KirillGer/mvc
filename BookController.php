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
		$books = new BookModel;
		array_push($data['name_book'], 'Fathers & Childrens');
		array_push($data['author'], 'Ivan Turgenev');
		array_push($data['category'], 'romance' );
	}

	public function deleteBook()
	{
		$books = new BookModel;
		$data = array_diff($data, ['name_book'], [1],);
		$data = array_diff($data, ['author'], [1]);
		$data = array_diff($data, ['category'], [1]);
	}
}

}
