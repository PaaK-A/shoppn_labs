<?php include "../controllers/general_controller.php"; ?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Phone Number</th>
        </thead>

        <tbody>
            <?php
                $selectall= selectAllContact_ctr();
                
                foreach ($selectall as $row)
                :
            ?>

                <tr>
                    <td><?php echo $row['pname']; ?></td>

                    <td><?php echo $row['pphoned']; ?></td>
    
                </tr>
            <?php endforeach;?>
            
        </tbody>
    </table>

    <br>
    
    <form action= "../actions/process_save.php" method="POST">
        <!--make fullname tectbox-->
        <input type="text" name="fname" placeholder="Enter your name" id="fullname" required>

       <!--make telephone number text box--> 
        <input type="text" name="tele" placeholder="Enter your phone number" id="telnumber" required> 

        <!--submit button-->
        <input type="submit" name="saveInfo" value="Save Info">
    </form>
</body>