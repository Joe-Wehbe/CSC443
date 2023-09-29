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
                margin-top: 1.5%;
                width: 130px;
            }

            .statement{
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

            .red { background-color: red; }
            .green { background-color: green; }
            .blue { background-color: blue; }
            .magenta { background-color: magenta; }
        </style>
    </head>

    <!--------------------------------------------------------------------------->

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

    <!--------------------------------------------------------------------------->
        
        <?php
        $N = $M = 0;  
        if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['N']) && isset($_GET['M'])) {
            $N = $_GET['N'];
            $M = $_GET['M'];?>

            <form method="POST">
                <input type="hidden" name="N" value="<?php echo $N; ?>">
                <input type="hidden" name="M" value="<?php echo $M; ?>">

                <div class="statement">
                    <h3> Check some boxes to draw a shape: <h3>
                </div>

                <?php
                for($i = 1; $i <= $N; $i++){?><br><?php
                    for($j = 1; $j <= $M; $j++){ ?>
                        <input id="checkboxes" type="checkbox" name="checkbox[<?php echo $i; ?>][<?php echo $j; ?>]" value="yes"><?php
                    }
                }?><br><br>

                <label for="colors">Choose a color:</label>
                <select name="color">
                    <option value="red">Red</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="magenta">Magenta</option>
                </select> <br>

                <label for="mode">Mode:</label>
                <label>
                    <input type="radio" name="mode" value="normal" checked> Normal
                </label>
                <label>
                    <input type="radio" name="mode" value="inverted"> Inverted
                </label><br>

                <input class="button" type="submit" value="Draw">

            </form><?php
        }?>

    <!--------------------------------------------------------------------------->

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $N = $_POST['N'];
            $M = $_POST['M'];

            if (isset($_POST["checkbox"]) && is_array($_POST["checkbox"])) { ?>

                <div class="statement">
                    <h3> Your shape:  <h3>
                </div> 

                <table border="1">          
                    <?php
                    for ($i = 1; $i <= $N; $i++) {?>
                        <tr><?php
                        for ($j = 1; $j <= $M; $j++) {   
                            
                            if(isset($_POST["mode"]) && $_POST["mode"] == "normal"){
                                if (isset($_POST["checkbox"][$i][$j]) && $_POST["checkbox"][$i][$j] == "yes") {
                                    if(isset($_POST["color"]) && $_POST["color"] == "red"){?>
                                        <td class="red"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "green"){?>
                                        <td class="green"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "blue"){?>
                                        <td id="blue"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "magenta"){?>
                                        <td id="magenta"></td><?php
                                    }
                                }else{?>
                                    <td></td><?php
                                }
                            }

                            if(isset($_POST["mode"]) && $_POST["mode"] == "inverted"){
                                if(!isset($_POST["checkbox"][$i][$j])) { 
                                    if(isset($_POST["color"]) && $_POST["color"] == "red"){?>
                                        <td class="red"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "green"){?>
                                        <td class="green"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "blue"){?>
                                        <td class="blue"></td><?php
                                    }
                                    if(isset($_POST["color"]) && $_POST["color"] == "magenta"){?>
                                        <td class="magenta"></td><?php
                                    }
                                }else{?>
                                    <td></td><?php
                                }
                            }
                        }?></tr><?php
                    }?>   
                </table><?php
            }
        }?>
    </body>
</html>
