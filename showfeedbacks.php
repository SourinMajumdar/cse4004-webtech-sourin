<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedbacks</title>
    <style>
        body{
            background: linear-gradient(to left, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            text-align :center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table, td{
            margin-left: auto ; margin-right:auto;
            margin-top:-40px;
            border: none;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 50px;
            height: auto;
            width:1000px;
            text-align: justify;
        }
        td{
            background-image: linear-gradient(to left, red, blue);
        }
        td:hover{
            background-image: linear-gradient(to left, rgb(255, 46, 46), rgb(38, 38, 252));
            color: white;
            border:1px solid white;
        }

        p{
            font-size: 28px;
            color: white;
            margin-left:60px; margin-right:60px;
            margin-top: 30px; margin-bottom: 30px;
        }

        h2{
            font-size:60px;
            background-image: linear-gradient(to left, rgb(130, 1, 10), rgb(3, 3, 148));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        button{
            margin-top:50px;
            margin-bottom:20px;
            color: white;
            border-radius: 20px;
            border: 0;
            height: 60px; width: 280px;
            font-size: 25px;
            background-image: linear-gradient(to right,  rgb(204, 2, 12), rgb(71, 0, 122)); */
        }
        button:hover{
            background-image: linear-gradient(to right,  rgb(3, 3, 148), rgb(58, 68, 252));
        }
        .head{
            width:500px;
            margin-left:auto; margin-right:auto;
        }
    
    </style>
</head>
<body>
    <div class="head"><h2>Feedbacks</h2></div>
    
    <?php
        $conn = new mysqli("localhost", "root","sourin", "feedback");
        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);
        echo "<table>"; 
        while($row = $result->fetch_assoc()) {
            echo "<tr><td><p>".$row["feedback"]."</p></td></tr>";
        } echo "</table>";
        $conn->close(); 
    ?>
    <a href="light.html"><button>Go back to main page</button></a>


</body>
</html>