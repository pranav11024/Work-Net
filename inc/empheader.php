<?php

    include "inc/db.php";
    $loginID="";
    if(isset($_SESSION['user'])){
        $loginID=$_SESSION['user'];
    }



?>
    <style>

        a:active {
            color: inherit
        }
        a:link {
            color: inherit
        }
        a:visited {
            color: inherit
        }
    </style>
    <body style="">
        <div style="">
        <table width="100%" style="padding: 25px; background-color: #ffa500; color: white; font-family: Verdana;">
            <tr>
                <td width="250px" align="left" style="color:#ffff99; font-size:50px; font-family:Cantarell;"><a href="employer.php" style="text-decoration : none;">Work-Net</a></td>
                <td width="" align="left" style="font-size:25px">Welcome <?php 
                
                if(isset($_SESSION['user'])){
                    $sql = "SELECT * FROM employer WHERE userID='$loginID';";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                    
                    echo $row['name'];
                }
                else {
                    echo "Placeholder";
                }

                ?></td>
                <td width="" align="right"><a href="logout.php" style="text-decoration : none; font-size:25px">Logout</a></td>
            </tr>
        </table>
        </div>
    </body>
