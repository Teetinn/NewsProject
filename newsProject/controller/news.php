<?php
  INCLUDE  "view/news.php";

  if(isset($_SESSION['id'])){
    $userId = $_SESSION['id'];
    
    if(isset($_GET['id'])){
        $newsID = $_GET['id'];
    }
        

if(isset($_POST['submitcomment'])) {
    if($_SESSION['id']) {
      $user = $db->query("SELECT * FROM `user` WHERE id = '$userId'");
      $account = $user->fetch_assoc();
      $comment = $_POST['Comment'];
      $username = $account['userName'];
      $query = "INSERT INTO comments VALUES('$newsID', '', '$comment', '$username', NOW(), '{$account['Picture']}')";
      mysqli_query($db, $query);
      
      echo "<script>document.location.href = '?view=news&id={$newsID}'</script>";
    } else{
      echo "<script>document.location.href = '?view=login'</script>";
    }
  }
}
?>
