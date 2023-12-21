<?php
include('database.php');

$message = '';

if (isset($_POST['addCategory'])) {
    $category = $_POST['category'];
    $description = $_POST['description'];

    $query = "INSERT INTO categories (category, description) VALUES ('$category', '$description')";

    if (mysqli_query($connection, $query)) {
        $message = "Category added successfully!";
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

if (isset($_POST['updateCategory'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $query = "UPDATE categories SET category = '$category', description = '$description' WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        $message = "Category updated successfully!";
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

if (isset($_POST['deleteCategory'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM categories WHERE id = $id";

    if (mysqli_query($connection, $query)) {
        $message = "Category deleted successfully!";
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Category</title>
</head>
<body>

<h1>Manage Category</h1>

<form action="category.php" method="post">
    <label for="category">Category:</label>
    <input type="text" id="category" name="category" required>
    <br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" required>
    <br>
    <input type="submit" name="addCategory" value="Add Category">
</form>

<h2>Available Categories</h2>

<?php echo $message; ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    <?php
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>
                <form action='category.php' method='post'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <input type='submit' name='editCategory' value='Edit'>
                    <input type='submit' name='deleteCategory' value='Delete'>
                </form>
            </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No categories found</td></tr>";
    }
    ?>
</table>

</body>
</html>
<!-- 

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
            padding: 30px;
            border: 1px solid black;
            border-radius: 5px;
        }
        input{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        textarea{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        input[type="checkbox"]{
            width: 13px;
            height: 13px;
            margin: 0;
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
<body>
    <form action="">
        <label for="name">Category Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
        <label for="image">Image</label><br>
        <input type="file" name="image" id="image">
        <label for="status">Status</label>
        <input type="checkbox" name="status">
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html> -->