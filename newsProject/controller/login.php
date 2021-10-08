<?php
include "include/db_connection.php";


if(isset($_POST['submit'])) {
    $password = $_POST['password'];
    $userName = $_POST['userName'];
    
    $statement = $db->prepare("SELECT * from user WHERE userName=?");
    $statement->bind_param("s", $userName);
    $statement->execute();
    $result = $statement->get_result();

    if($result->num_rows > 0)
      $account = $result->fetch_assoc();
        if(password_verify($password, $account['password'])) {
            echo "<form id='form' action='?view=dashboard' method='POST'>
                    <input type='hidden' name='userName' value='{$account['userName']}'>
                 </form>
                 <script>
                    document.getElementById('form').submit();
                 </script>";
                 
            
           
        }else {
            echo "
                <script>
                    alert('Incorrect Username or Password! Please Try again!');
                    document.location.href = '?view=login';
                </script>
            
            ";
        }

        
       
}

 include "view/login.php";

?>