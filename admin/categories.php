<?php
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $sql = "INSERT INTO categories (name) VALUES ('$name')";

    if (mysqli_query($conn, $sql)) {
        header("Location: categories.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$result = mysqli_query($conn, "SELECT * FROM categories");
?>

<h1>Categories</h1>

<form method="POST">
    <label>Category name:</label><br>
    <input type="text" name="name" required>
    <button type="submit">Add Category</button>
</form>

<hr>

<h2>Category List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

    <?php while($category = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
        </tr>
    <?php } ?>
</table>

<br>
<a href="products.php">Back to Products</a>