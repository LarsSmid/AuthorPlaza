<main>
	
	<header>
		<h1>Books</h1>
		<h3> <?= $authors['author_name']  ?></h3>
	</header>
	<nav>
		<ul>
			<li><a href="<?= URL ?>Authors/index"><h4>home </h4></a></li>
			<li><a href="<?= URL ?>books/create"><h4>Add book</h4></a></li>
		</ul>
	</nav>
	<table>
		<tr>
			<th>Title</th>
			<th>Publisher</th>
			<th>Summary</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach ($Books as $book) { ?>
		<tr>
			<td nowrap="true"><?= $book['book_title'];?></td>
			<td nowrap="true"><?= $book['book_publisher'];?></td>
			<td><?= $book['book_summary'];?></td>
			<td><a href="<?= URL ?>books/edit/<?= $book['book_id'] ?>"> Edit</a></td>
			<td><a href="<?= URL ?>books/delete/<?= $book['book_id'] ?>"> Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>