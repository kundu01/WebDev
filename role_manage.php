<?php
include("../config/config.php");
include("header.php");
if(isset($_GET['id'])&&$_GET['id']>0)
{
    $id=$_GET['id'];
    $query="DELETE FROM role WHERE id=$id";
    $checkResult=$conn->query($query);
    if($checkResult){
        $_SESSION['status']="success";
        header("location:../role.php");
    }
    else{
        $_SESSION['status']="fail";
        header("location:../role.php");
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
            margin-top: 50px;
            width: 500px;
            display:;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        button{
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
        }
        button[type="reset"]{
            background-color: red;
        }
        button[type="submit"]{
            background-color: green;
        }
    </style>
</head>
<h2>role manage</h2>

<body>
    <form action="">
        <label for="name">Role Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Role name"><br><br>
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
    <?php
    include("footer.php");
    ?>
</body>
</html>