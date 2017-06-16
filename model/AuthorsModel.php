<?php 

function getAllAuthors() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAuthor($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM authors WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}