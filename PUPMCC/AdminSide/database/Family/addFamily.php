<?php
session_start();

    if(isset($_POST['txtAddFamilyName']))
        {  
            $connect =  mysqli_connect("localhost", "root", "", "pupmcc") or die (mysqli_error());

            $strFamilyName = mysqli_real_escape_string($connect, $_POST['txtAddFamilyName']);

            $strQuery = mysqli_query($connect, "SELECT * FROM family_tbl where FamilyName = '$strFamilyName' and isDeleted = 0");
            $strRow = mysqli_num_rows($strQuery);

            if ($strRow==0)
            {
            $query = mysqli_query($connect, "INSERT INTO family_tbl (FamilyName, isDeleted) VALUES ('$strFamilyName', 0 )");
                echo "1";
            }

            else
            {
                echo "2";
            }

           $connect->close();
        }
        

        
?>