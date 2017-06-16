<?php 
function getAllBooks() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getBooks($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
}
function deleteBooks($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM books WHERE book_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}
function getBook($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE book_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}
function createBook() 
{
	$author_id = isset($_POST['author_id']) ? $_POST['author_id'] : null;
	$book_title = isset($_POST['book_title']) ? $_POST['book_title'] : null;
	$book_publisher = isset($_POST['book_publisher']) ? $_POST['book_publisher'] : null;
	$book_summary = isset($_POST['book_summary']) ? $_POST['book_summary'] : null;
	
	if (strlen($author_id) == 0 || strlen($book_title) == 0 || strlen($book_publisher) == 0 || strlen($book_summary) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO books(author_id, book_title, book_publisher, book_summary) VALUES (:author_id, :book_title, :book_publisher, :book_summary)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':author_id' => $author_id,
		':book_title' => $book_title,
		':book_publisher' => $book_publisher,
		':book_summary' => $book_summary));

	$db = null;
	
	return true;
}

function editBooks() 
{
	$author_id = isset($_POST['author_id']) ? $_POST['author_id'] : null;
	$book_title = isset($_POST['book_title']) ? $_POST['book_title'] : null;
	$book_publisher = isset($_POST['book_publisher']) ? $_POST['book_publisher'] : null;
	$book_summary = isset($_POST['book_summary']) ? $_POST['book_summary'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($author_id) == 0 || strlen($book_title) == 0 || strlen($book_publisher) == 0 || strlen($book_summary) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE books SET author_id = :author_id, book_title = :book_title, book_publisher = :book_publisher, book_summary = :book_summary WHERE book_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':author_id' => $author_id,
		':book_title' => $book_title,
		':book_publisher' => $book_publisher,
		':book_summary' => $book_summary,
		':id' => $id));

	$db = null;
	
	return true;
}
function getBoek($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE book_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

