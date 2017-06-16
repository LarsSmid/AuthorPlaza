<?php

require(ROOT . "model/AuthorsModel.php");

function index()
{
	render("Authors/index", array(
		'Authors' => getAllAuthors()
	));
}

