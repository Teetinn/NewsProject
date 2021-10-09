<?php
include "include/db_connection.php";
session_start();

if(isset($_POST['submit'])) {
    $password = $_POST['password'];
    $userName = $_POST['userName'];

    //back script google captcha
    if(isset($_POST['g-recaptcha-response'])) $captcha= $_POST['g-recaptcha-response'];
     if(!$captcha){
            echo "<h2>Please check the captcha</h2>";
            exit;
        }
    $str= "https://www.google.com/recaptcha/api/siteverify?secret=6Lcy37EcAAAAAD59Mj50b_AxkSuuLvYwk9yX_LCv"."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    
        $response= file_get_contents($str);
        $response_arr=(array) json_decode($response);

    
    $statement = $db->prepare("SELECT * from user WHERE userName=?");
    $statement->bind_param("s", $userName);
    $statement->execute();
    $result = $statement->get_result();

    if($result->num_rows > 0)
      $account = $result->fetch_assoc();
      $_SESSION['id'] = $account['id'];
      $_SESSION["userName"] = $account['userName'];

      if($password == "" || $userName == ""){
        echo "<script>alert(\"Username atau password salah\")</script>";
        echo "<script>document.location.href='?view=login'</script>";
      }
      if(password_verify($password, $account['password'])) {
          if(isset($_SESSION['id'])){
          echo "<form id='form' action='?view=dashboard' method='POST'>
                  <input type='hidden' name='userName' value='{$account['userName']}'>
               </form>
               <script>
                  document.getElementById('form').submit();
               </script>
          ";
          }
       
         
      }else {
          echo "
              <script>
                  alert(\"Username atau Password Salah\");
                 
              </script>
          ";
             echo "
              <script>
                   document.location.href = ?view=login';
                 
              </script>
          ";
      }
      

        // if(password_verify($password, $account['password'])) {
        //     echo "<form id='form' action='?view=dashboard' method='POST'>
        //             <input type='hidden' name='userName' value='{$account['userName']}'>
        //          </form>
        //          <script>
        //             document.getElementById('form').submit();
        //          </script>";
                 
            
           
        // }else {
        //     echo "
        //         <script>
        //             alert('Incorrect Username or Password! Please Try again!');
        //             document.location.href = '?view=login';
        //         </script>
            
        //     ";
        // }

        
       
}

 include "view/login.php";

?>