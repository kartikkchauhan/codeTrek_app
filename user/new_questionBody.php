<div class="container mt-5">
		<div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
			<h3 class="font-weight-light mb-0">Ask question</h3>
		</div>
		<div class="card mb-4 shadow-sm">
			<div class="card-body">
				<form action="submit_Question.php" method="POST">
					<div class="form-group">
						<label for="question">Title<sup class="text-danger">*</sup></label>
						<input type="text" class="form-control" name="title" id="question" placeholder="Enter a short and proper title for your question" required>
					</div>
					<div class="form-group">
						<label for="description">Description<sup class="text-danger">*</sup></label>
						<textarea name="description" id="description" rows="10" class="form-control" placeholder="Enter a detailed description of what problem you're facing and steps to replicate" required></textarea>
					</div>
					<div class="form-group">
						<label for="tags">Add tags</label>
						<input type="text" name="tags" id="tags" class="form-control" placeholder="tag1, tag2, tag3">
						<small class="text-secondary">Tags will help others to find your question faster. Add comma separated tags. For ex: <span class="font-weight-light font-italic">codetrek, bootstrap, frontend</span></small>
					</div>
					<button type="submit" class="btn btn-primary mt-3" name="submit">Post your question</button>
				</form>
			</div>
		</div>
	</div>