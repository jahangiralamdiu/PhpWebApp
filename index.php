<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
            ID : <input type="text" name="idText"><br/>
            Name<input type="text" name="nameText"><br/>
            Salary : <input type="text" name="salaryText"><br/>
            <input type="submit" name="submitButton"><br/>
            
        </form>
        <?php
        // put your code here
        
        if(isset($_GET['submitButton']))
        {
        
        $id = $_GET['idText'];
        $name = $_GET['nameText'];
        $salary = $_GET['salaryText'];
        echo $id. ' '.$name.' '.$salary;
        
        }
        
        ?>
    </body>
</html>
