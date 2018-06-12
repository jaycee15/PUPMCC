<?php
session_start();

    if(isset($_POST['txtEditFamilyID']))
        {  
            $connect =  mysqli_connect("localhost", "root", "", "pupmcc") or die (mysqli_error());

            $strFamilyID = $_POST['txtEditFamilyID'];
            $strFamilyName = mysqli_real_escape_string($connect, $_POST['txtEditFamilyName']);

            $strQuery = mysqli_query($connect, "SELECT * FROM family_tbl where FamilyName = '$strFamilyName' AND isDeleted = 0");
            $strRow = mysqli_num_rows($strQuery);

            if ($strRow==0)
            {
            $query = mysqli_query($connect, "UPDATE family_tbl  
                SET FamilyName = '$strFamilyName'  
                WHERE FamilyID = '$strFamilyID'");

                echo "1";
            }

            else
            {
                echo "2";
            }

           $connect->close();
        }
        

        
?>