
<?php echo $this->getContent(); ?>

<div class="jumbotron">
    <h1>Order a Topic</h1>
    <p>A website for teachers to publish topic and get the necessary information.</p>
    <p><?php echo $this->tag->linkTo(array('register', 'Sign Up here, Its free &raquo;', 'class' => 'btn btn-primary btn-large btn-success')); ?></p>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>Publish Topic</h2>
        <p>Publish a topic you want to know about.</p>
    </div>
    <div class="col-md-4">
        <h2>Get Votes / Search topics</h2>
        <p>If people like your topic you'll get votes and sell people's interesting topics</p>
    </div>
    <div class="col-md-4">
        <h2>Get the content</h2>
        <p>If you get the required minimum votes then we'll publish the content for your topic.</p>
    </div>
</div>
