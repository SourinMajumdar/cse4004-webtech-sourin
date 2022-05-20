<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <style>
    body{
      background-image: linear-gradient(90deg, rgb(12, 12, 12), rgb(95, 95, 95));
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: rgb(255,255,255);
      margin-left:150px;
      font-size: 70px;
    }
    button{
      height: 60px;
      width: 360px;
      background-image: linear-gradient(to left, rgb(2, 196, 122), rgb(1, 77, 48));
      color: rgb(255,255,255);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      border:0; border-radius: 10px;
      font-size: 30px;
      margin-top: 50px;
    }
    button:hover{background-image: linear-gradient(to left, rgb(18, 118, 219), rgb(0, 24, 112));}
    .show{
      height: 45px;
      width: 180px;
      background: rgb(182, 197, 252);
      /* background-image: linear-gradient(to left, , rgb(1, 77, 48)); */
      color: rgb(1, 18, 82);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      border:0; border-radius: 15px;
      font-size: 20px;
      font-weight: 600;
      margin-top: 50px;
      margin-right: 100px;
    }
    .show:hover{
      background: rgb(1, 133, 83);
      color: white;
    }
    div{text-align:right;}

  </style>
</head>
<body>
  <div><a href="showfeedbacks.php"><button class="show">View feedbacks</button></a></div>
  <?php
    $feedback_txt = $_POST['textarea'];
    $conn = mysqli_connect("localhost", "root","sourin", "feedback");
    $query ="insert into feedback(feedback) values ('$feedback_txt')";
    $result = mysqli_query($conn, $query);
    if($result)
      echo '<p style="margin-top:265px; margin-bottom:0">'."Thank you for your feedback!".'</p>';
    else
    die("Something terrible happened. Please try again. ");
  ?>
  <a href="index.html"><button>Go back to main page</button></a>
</body>

</html>

