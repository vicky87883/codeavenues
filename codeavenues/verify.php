<?php

require("connection.php");

if(isset($_GET['email']) && isset($_GET['v_code']))
{
    $query="SELECT * FROM `registered_user` WHERE `email`='$_GET[email]' OR `verificationcode`='$_GET[v_code]'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
           $result_fetch = mysqli_fetch_assoc($result);
           if($result_fetch['isverified']==0)
           {
            $update = "UPDATE `registered_user` SET `isverified`='1' WHERE `email`='$result_fetch[email]'";
            if(mysqli_query($con,$update))
            {
                
            echo "<script>alert('Email Verification Successful');
            window.location.href='userauth';
            </script>";
            }
            else{
                
            echo "<script>alert('Server Down!!!');
            window.location.href='userauth';
            </script>";
            }
           }
           else
           {

            echo "<script>alert('Server Down!!!');
            window.location.href='userauth';
            </script>";
           }
        }
        else{

        echo "<script>alert('Server Down!!!');
        window.location.href='userauth';
        </script>";
        }

    }
    else
    {
        echo "<script>alert('Server Down!!!');
        window.location.href='userauth';
        </script>";

    }
}