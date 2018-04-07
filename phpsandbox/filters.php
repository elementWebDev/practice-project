<?php
    # Header for BS and page refresh
    include 'inc/header.php';
?>
<!-- /header -->

<!-- content -->
<?php
    // Check for posted POST
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data Found<br>';
    } else {
        echo 'No Data<br>';
    }

/*
    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid';
        }
    }
    <!--
    <?php
    /*
        // Check for posted data GET
        if (filter_has_var(INPUT_GET, 'data')) {
            echo 'Data Found';
        } else {
            echo 'No Data';
        }

        #FILTER_VALIDATE_BOOLEAN
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL

        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_SANITIZE_STRING
        #FILTER_SANITIZE_URL
*/
/*
    # validate number

    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number<br>';
    } else {
        echo $var. ' is NOT a number<br>';
    }

    $var = '356df756ytr7fdghf77gzd64wgz';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));


    $var = '<script>alert(1)</script>';
    //echo $var;
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
*/
/*
    $filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 100
                )
            )
    );

    print_r(filter_input_array(INPUT_POST, $filters));
*/
    $arr = array(
        "name" => "testy mctesterson",
        "age" => "38",
        "email" => "dev@elementwebdev.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
?>

<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>

<br>


<!--
<iframe width="400" height="225" src="https://www.youtube.com/embed/pfY9LwcsH3A?list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->


<!-- footer -->
<?php
    include 'inc/footer.php';
?>
