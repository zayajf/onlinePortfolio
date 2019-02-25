<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Modification of description.">
    <meta name="author" content="Jonathon Zayas">
    <link rel="icon" href="../img/favicon.ico">
</head>
    <title>LIS4381 - Simple Calculator</title>
        <?php include_once("../css/include_css.php"); ?>


<body>
    <?php include_once("../global/nav.php"); ?>
    <div class="container">
        <div class="starter-template">
            <div class="page-header">
                <?php include_once("global/header.php"); ?> <!--required-->
            </div>
                <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                #Display Operation
                echo "<h2>$operation</h2>";

                if ($operation == 'Addition') {
                    $total = $num1 + $num2;
                    echo "$num1 + $num2 = $total";
                } elseif ($operation == 'Subtraction') {
                    $total = $num1 - $num2;
                    echo "$num1 - $num2 = $total";
                } elseif ($operation == 'Multiplication') {
                    $total = $num1 * $num2;
                    echo "$num1 x $num2 = $total";
                } elseif ($operation == 'Division') {
                    if ($num2 == 0) {
                        echo "Error Can't divide by 0";
                    } else {
                        $total = $num1 / $num2;
                        echo "$num1 / $num2 = $total";
                    }
                } elseif ($operation == 'Exponents') {
                    $total = $num1 ** $num2;
                    echo "$num1 raised by $num2 = $total";
                }
                 
                /*
                switch ($operation) {
                    case "Addition":
                        $total = $num1 + $num2;
                        echo "$num1 + $num2 = $total";
                        break;
                    case "Subtraction":
                        $total = $num1 - $num2;
                        echo "$num1 - $num2 = $total";
                        break;
                    case "Multiplication":
                        $total = $num1 * $num2;
                        echo "$num1 x $num2 = $total";
                        break;
                    case "Division":
                        if ($num2 == 0) {
                            echo "Error can't divide by 0";
                        } else {
                            $total = $num1 / $num2;
                            echo "$num1 / $num2 = $total";
                        }
                        break;
                    case "Exponents":
                        $total = $num1 ** $num2;
                        echo "$num1 raised by $num2 = $total";
                        break;
                }
                 */
                ?>
                <div>
                    <br>
                    <form action="index.php" method="post">
                    <button type="submit" class="btn btn-primary" name="return" value="return">return</button>
                    <br>
                    <br>
                </div>
                <?php include_once("global/footer.php"); ?> <!--required-->
        </div> <!-- end starter-template -->
 </div> <!-- end container -->
</body>
</html>
 