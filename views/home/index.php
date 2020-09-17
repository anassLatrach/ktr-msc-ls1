<div class="text-center">
	<h1>Welcome To business card share's</h1>
	<p class="lead">got a business card? Share it with other business</p>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<div class="row">
        <?php foreach($viewmodel as $item) : ?>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $item['name']; ?></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $item['email']; ?>
                            <br />
                            <i class="glyphicon glyphicon-home"></i><?php echo $item['company']; ?>
                            <br />
                            <i class="glyphicon glyphicon-phone"></i><?php echo $item['tel']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>    
    <?php endforeach; ?>
    </div>
	<?php endif; ?>
</div>