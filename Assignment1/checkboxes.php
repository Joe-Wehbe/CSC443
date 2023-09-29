<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 1</title>

        <style>
            body{
                text-align: center;
                margin-top: 3%;
            }

            .button{
                margin-top: 1%;
            }

            #statement1{
                margin-top: 5%;
            }

            #statement2{
                margin-top: 5%;
            }

            table {
            border-collapse: collapse;
            margin: 0 auto;
            }

            th, td {
                text-align: center;
                padding: 10px;
            }

            .colored{
                background-color: blue;
            }
        </style>
    </head>

    <body>
        <h1> Welcome to shape drawer! </h1> <br><br>

        <h3> Enter the size of the billboard: </h3>
        <form method="GET">
            <label for="N">Number of rows (N)</label><br>
            <input  type="number" name="N" required><br><br>
            
            <label for="M">Number of columns (M)</label><br>
            <input type="number" name="M" required><br>
            
            <input class="button" type="submit" value="Generate Billboard">
        </form>
        
        <?php
        $N = $M = 0;  
        if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['N']) && isset($_GET['M'])) {
            $N = $_GET['N'];
            $M = $_GET['M'];?>

            <form method="POST">
            <input type="hidden" name="N" value="<?php echo $N; ?>">
            <input type="hidden" name="M" value="<?php echo $M; ?>">

            <div id="statement1">
                <h3> Check some boxes to draw a shape: <h3>
            </div>

            <?php
            for($i = 1; $i <= $N; $i++){?><br><?php
                for($j = 1; $j <= $M; $j++){ ?>
                    <input id="checkboxes" type="checkbox" name="checkbox[<?php echo $i; ?>][<?php echo $j; ?>]" value="yes"><?php
                }
            }?><br>
            <input class="button" type="submit" value="Draw">
        </form>
        <?php
        }?>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $N = $_POST['N'];
            $M = $_POST['M'];

            if (isset($_POST["checkbox"]) && is_array($_POST["checkbox"])) { ?>

                <div id="statement2">
                    <h3> Your shape:  <h3>
                </div> 

                <table border="1">          
                    <?php
                    for ($i = 1; $i <= $N; $i++) {?>
                        <tr><?php
                        for ($j = 1; $j <= $M; $j++) {                         
                            if (isset($_POST["checkbox"][$i][$j]) && $_POST["checkbox"][$i][$j] == "yes") {?>
                                <td class="colored"></td><?php
                            } else { ?>
                                <td></td><?php
                            }?></td><?php
                        }?></tr><?php
                    }?>   
                </table><?php
            }
        }?>
    </body>
</html>
