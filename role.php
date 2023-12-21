<?php
include("../config/config.php");
include("header.php");
if(isset($_POST['title'])&& trim($_POST['title'])!=''){
    $title=trim($_POST['title']);
    $description=trim($_POST['description']);
//insert unset function is used to remove 
$query="INSERT INTO 'role'('name','id')values('$title','$description')";
$checkResult=$conn->query($query);
if($checkResult){
    $_SESSION['status']='success';
    header("location:../role.php");
    echo 'pass';
}
else{
    echo 'fail';
}
}
?>
<!--<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="table-container">
    <h2>Action Role</h2>
    <a href="role_manage.php">add new role</a>
    <button onclick="addRole()">Add New Role</button>
    <br><br>
    <input type="text" id="searchInput" onkeyup="search()" placeholder="Search">
    <table border="1"id="actionTable">
        <thead>
        <tr>
            <th>sr no</th>
            <th>title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
</thead>
</tbody>
        <tr>
            <td>sr no</td>
            <td>admin</td>
            <td>this me</d>
            <td><button>edit</button> <button>delete</button></td>
        </tr>
</tbody>
    </table>
</div>

<script src="script.js"></script>

</body>
</html>-->
<?php
include("footer.php");
?>