<h1>Este es el mi Tweeter <?php echo $twiter; ?> </h1>
<?php foreach ($model as $users): ?>
    <h2>
        <?php echo $users->username; ?>         
    </h2>
<?php endforeach; ?>

