<?php
	$isBlankPage = get_field('is_blank_page');
	get_header('header', [ 'isBlankPage' => $isBlankPage]);
?>

<div class="page <?php if ($isBlankPage) echo 'page-blank'; ?>">
	<div class="container">
		<h1><?=get_the_title();?></h1>
		<div class="single-content"><?=get_the_content();?></div>
	</div>
</div>

<?php get_footer('footer', [ 'isBlankPage' => $isBlankPage]); ?>
