<form action="<?php echo e(route('post_picture')); ?>" enctype="multipart/form-data" method="post">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	picture
		<input type="file" name="picture" accept="image/*" >
		<button>ok</button>
</form>