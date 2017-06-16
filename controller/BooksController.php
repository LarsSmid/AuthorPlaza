<?php

require(ROOT . "model/BooksModel.php");
require(ROOT . "model/AuthorsModel.php");

function index($id)
{
	render("Books/index", array(
		'Books' => getBooks($id),
		'authors' => getAuthor($id)
	));
}
function delete($id)
{
	$book = getBook($id);

	if (!deleteBooks($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "books/index/". $book['author_id']);
}
function create()
{
	render("books/create");
}
function createSave()
{
	

	if (!createBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "books/index/". $_POST['author_id']);
}
function edit($id)
{
	render("books/edit", array(
		'boek' => getBoek($id)
	));
}
function editSave()
{
	if (!editBooks()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "books/index/". $_POST['author_id']);
} 
