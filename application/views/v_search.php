<div id="site_content">
	<?php include 'sidebar.php' ?>
	<div id="content">
		<h1>Search for: <?php $query ?></h1>
		<!-- insert the page content here -->
		<?php foreach ($posts as $post) { ?>
			<h2><a style="color:red;" href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>"><?= $post['post_title']; ?></a></h2>
			<?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') { ?>
				<p>
					<a href="<?= base_url() ?>blog/editpost/<?= $post['post_id'] ?>"><span class="glyphicon glyphicon-edit" title="Edit post"></span></a> |
					<a href="<?= base_url() ?>blog/deletepost/<?= $post['post_id'] ?>"><span style="color:#f77;" class="glyphicon glyphicon-remove-circle" title="Delete post"></span></a>
				</p>
			<?php } ?>
			<p><?= substr(strip_tags($post['post']), 0, 200) . '...'; ?></p>
			<p><a href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>">Read More</a></p>
			<?php
		} ?>
	</div>
</div>