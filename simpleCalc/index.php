<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Modification of description.">
    <meta name="author" content="Jonathon Zayas">
    <link rel="icon" href="../img/favicon.ico">

    <title>LIS4381 - Simple Calculator</title>
        <?php include_once("../css/include_css.php"); ?>
</head>
<body>

    <?php include_once("../global/nav.php"); ?>
    <div class="container">
        <div class="starter-template">

                    <div class="page-header">
                        <?php include_once("global/header.php"); ?>
                    </div>

                    <h2>Perform Calculation</h2>
                        <form id="add_store_form" method="post" class="form-horizontal" action="calculation.php">
                                <div class="form-group">
                                        <label class="col-sm-3 control-label">Num1:</label>
                                        <div class="col-sm-5">
                                                <input type="text" class="form-control" name="num1" />
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-sm-3 control-label">Num2:</label>
                                        <div class="col-sm-5">
                                                <input type="text" class="form-control" name="num2" />
                                        </div>
                                </div>


                                <h4>Choose Calculation Type</h4>
                                <input type="radio" name="operation" value="Addition" checked> Addition
                                <input type="radio" name="operation" value="Subtraction" > Subtraction
                                <input type="radio" name="operation" value="Multiplication"> Multiplication
                                <input type="radio" name="operation" value="Division"> Division
                                <input type="radio" name="operation" value="Exponents"> Exponentiation 
                                <br><br>
                                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">calculate</button>
                        </form>
                        <br>
            <?php include_once "global/footer.php"; ?>

        </div> <!-- end starter-template -->
 </div> <!-- end container -->

    <!-- Bootstrap JavaScript
    ================================================== -->
    <!-- Placed at end of document so pages load faster -->
            <?php include_once("../js/include_js.php"); ?>

<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {

    $('#add_store_form').formValidation({
            message: 'This value is not valid',
            icon: {
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh'
            },
            fields: {
                    num1: {
                            validators: {
                                    notEmpty: {
                                     message: 'Number required'
                                    },
                                    stringLength: {
                                            min: 1,
                                            max: 100000000000000,
                                     message: 'Must be a number!'
                                    },
                                    regexp: {
                                        //alphanumeric, hyphens, underscores, and spaces
                                        //regexp: /^[a-zA-Z0-9\-_\s]+$/,
                                        //similar to: (though, \w supports other Unicode characters)
                                            regexp: /^[0-9]+$/,
                                        message: 'Must be a number'
                                    },
                            },
                    },

                    num2: {
                            validators: {
                                    notEmpty: {
                                            message: 'Number required'
                                    },
                                    stringLength: {
                                            min: 1,
                                            max: 100000000000000,
                                            message: 'Must be a number!'
                                    },
                                    regexp: {
                                        //street: only letters, numbers, commas, hyphens, space character, and periods
                                        regexp: /^[0-9]+$/,
                                    message: 'Must be a number'
                                    },
                            },
                    },

            }
    });
});
</script>

</body>
</html>