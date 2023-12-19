<?php 
 
session_start(); // start session

// check if form has been submitted
if(isset($_POST['submit'])) {
  
  // retrieve input values from form
  $email = $_POST['uemail'];
  $user_password = $_POST['pass'];
  
  // connect to database
  $servername = "localhost";  
  $username = "root";  
  $password = "";  
  $db="project";
  $conn = mysqli_connect($servername,$username, $password, $db);

//   $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
  
  // check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // prepare SQL query
  $sql = "SELECT * FROM signup WHERE uemail = ? AND pass = ?";
  
  // create a prepared statement
  $stmt = mysqli_prepare($conn, $sql);
  
  // bind parameters to statement
  mysqli_stmt_bind_param($stmt, "ss", $email, $user_password);
  
  // execute statement
  mysqli_stmt_execute($stmt);
  
  // get result
  $result = mysqli_stmt_get_result($stmt);
  
  // check if query returned a row
  if (mysqli_num_rows($result) > 0) {
    
    // user authenticated
    $row = mysqli_fetch_assoc($result);
    
    // set session variables
    $_SESSION['user_uemail'] = $row['uemail'];
    $_SESSION['user_pass'] = $row['pass'];
    
    // redirect to another page
    header('Location: index.php');
    exit;
    
  } else {
    
    // authentication failed
    echo "<script>alert('Invalid email or password!');</script>";

    
  }
  
  // close statement and database connection
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  
}
?>