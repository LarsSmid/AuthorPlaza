<main>
<div class="form">
	<header class="books">
		<h1>Edit</h1>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>Authors/index"><h4>Home</h4></a></li>
		</ul>
		
	</nav>
	<form action="<?= URL ?>books/editSave" method="post">
	
		<div>
			<label>Author id</label>
			<input type="text" name="author_id" value="<?= $boek['author_id']; ?>">
		</div>

		<div>
			<label>Title</label>
			<input type="text" name="book_title" value="<?= $boek['book_title']; ?>">
		</div>

		<div>
			<label>Publisher</label>
			<input type="text" name="book_publisher" value="<?= $boek['book_publisher']; ?>">
		</div>
		<div>
			<label>Summary</label>
			<textarea type= "text" name="book_summary" ><?= $boek['book_summary']; ?></textarea>
		</div>

		<input type="hidden" name="id" value="<?= $boek['book_id']; ?>">

		<div><label>&nbsp;</label><input type="submit" value="submit"></div>

	
	</form>

</div>
</main>