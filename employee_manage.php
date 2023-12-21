
<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="table-container">
    <h2>Action Role</h2>
    <a href="employee_manage.php">add new employee</a>
  <form method="POST" action="" enctype="multipart/form-date">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit">    
    <input type="text" id="searchInput" onkeyup="search()" placeholder="Search">
    <table border="1" id="actionTable">
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
            <td>1</td>
            <td>admin</td>
            <td>akas@dsf.com</d>
            <td><button>edit</button> <button>delete</button></td>
        </tr>
</tbody>
    </table>
</div>

<script src="script.js"></script>

</body>
</html>
<?php
include("footer.php");
?>