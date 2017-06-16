<main>
	
	<header>
		<h1>Authors</h1>
	</header>
	<table>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Zipcode</th>
			<th>City</th>
			<th>Books</th>
		</tr>
<?php foreach ($Authors as $author) { ?>
		<tr>
			<td><?= $author['author_name'];?></td>
			<td><?= $author['author_address'];?></td>
			<td><?= $author['author_zipcode'];?></td>
			<td><?= $author['author_city'];?></td>
			<td><a href="<?= URL ?>books/index/<?= $author['author_id'] ?>">show</a></td>
		</tr>
<?php } ?>
	</table>
	<footer>&copy; by Da Vinci College</footer>
</main>



