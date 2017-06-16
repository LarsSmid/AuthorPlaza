<main>
	<header class="books">
		<h1>Add Book</h1>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>Authors/index"><h4>Home</h4></a></li>
		</ul>
		
	</nav>

	<div class="form">
	<form action="<?= URL ?>books/createSave" method="post">
		<div><label>Author id</label><input type="text" name="author_id"></div>
		<div><label>Title</label><input type="text" name="book_title"></div>
		<div><label>Publisher</label><input type="text" name="book_publisher"></div>
		<div><label>Summary</label><textarea type= "text" name="book_summary"></textarea></div>
		<div><label>&nbsp;</label><input type="submit" value="submit"></div>
	</form>
	</div>
		

	<footer>&copy; by Da Vinci College</footer>
</main>