<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Books</title>
	<link rel="stylesheet" type="text/css" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<h1>ADD BOOK</h1>
			<form method="POST" action="/save/book">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" id="title" class="form-control" name="title"/>
				</div>
				<div class="form-group">
					<label for="author">Author</label>
					<input type="text" id="author" class="form-control" name="author"/>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" id="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="isbn">ISBN</label>
					<input type="text" id="isbn" class="form-control" name="isbn"/>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>