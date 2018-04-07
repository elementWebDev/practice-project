<?php include 'inc/header.php'; ?>
<?php
    # Ternary & Shorthand Syntax
    $loggedIn = true;
    $arr = [1,2,3,4,5];
    /*
        if ($loggedIn){
            echo 'You are logged in';
        } else {
            echo 'You are NOT logged in';
        }
    */

    // echo ($loggedIn) ? '' : '';
    //echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

    //$isRegistered = ($loggedIn == true) ? true : false;
/*
    $isRegistered = ($loggedIn == true) ? 'You\'re logged in' : 'Please login or continue as Guest';
    echo $isRegistered .'<br>';

    $age = 7;
    $score = 25;

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional'):($age > 10 ? 'Horrible':'Average'));
*/
?>
<!-- if else hard to read / write
<div>
<?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
<?php } else {?>
    <h1>Welcome Guest</h1>
<?php } ?>
</div>
-->


<!-- If / Else - Preffered -->
<div>
    <?php if($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<!-- foreach -->
<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<!-- for -->
<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>
