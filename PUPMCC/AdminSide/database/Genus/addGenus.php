<?php
session_start();

    if(isset($_POST['txtAddFamID']))
        {  
            $connect =  mysqli_connect("localhost", "root", "", "pupmcc") or die (mysqli_error());

            $strFamID = $_POST['txtAddFamID'];
            $strGenusName = mysqli_real_escape_string($connect, $_POST['txtAddGenusName']);

            $strQuery = mysqli_query($connect, "SELECT * FROM genus_tbl WHERE FamilyID = '$strFamID' AND GenusName = '$strGenusName' AND isDeleted = 0");
            $strRow = mysqli_num_rows($strQuery);

            if ($strRow==0)
            {
            $query = mysqli_query($connect, "INSERT INTO genus_tbl (FamilyID, GenusName, isDeleted) VALUES ('$strFamID', '$strGenusName', 0 )");
                echo "1";
            }

            else
            {
                echo "2";
            }

           $connect->close();
        }
        

        
?>