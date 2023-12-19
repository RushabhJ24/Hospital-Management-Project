<html>

<head>
    <title>Password Verification</title>
</head>

<body>
    <?php
     include 'connection.php';
     global $conn;

            $recid=$_POST['uemail'];
            $recpass=$_POST['pass'];
                   
            $sql = "SELECT pass FROM signup where uemail='$recid'";
            $result = $conn->query($sql);
            
            
                
            if(strcmp($recpass,$pass)==0)
            {
                 session_start();
                    $_SESSION['user_id'] = $recid;
                 echo "<script type='text/javascript'>  window.location.replace('index.php');</script>";
            }
            else{
                
                    header("Refresh:0; URL=redir-sign.php");
                       die();
            }
            
                $conn->close();
            // Check connection

            
        ?>
</body>

</html>
