<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbcon->query("SELECT * FROM movies ORDER BY score DESC, title ASC ");

?>

<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="extra.css"/> -->
<title>Result_Page</title>
</head>
<body>
<div class="container-fluid bg-light">
<br>
<a href="result.php" class="btn btn-primary " role="button">TOP MOVIES & TV shows</a>
<br>
<hr/>
<table width='80%' border=0>

    <tr bgcolor='grey'>
        <td>id</td>
        <td>title</td>
        <td>score</td>
        <td>type</td>
    </tr>
    
    <?php
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['score']."</td>";
            echo "<td>".$row['type']."</td>";
        }
    ?>

</table>

<div class="hero"> 
<div class="row dsetup
<br>
    <form name="fsetupction="result.php">
        <table bosetup> 	
            <tr> 	
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $country;?>"></td>
            </tr>	
            <tr> 	
                <td>Score</td>
                <td><input type="number" name="score" value="<?php echo $sellyy;?>"></td>
            </tr>	
            <tr> 	
                <td>Type</td>
                <td><input type="number" name="type" value="<?php echo $sellmm;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idn" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" class="btn btn-primary mt-3" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</div>
</div> 
</div>

<!--Bootstrap & Jquery scripts-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Axios script-->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<!--Your script-->
<!-- <script src="script.js"></script> -->

</body>
</html>