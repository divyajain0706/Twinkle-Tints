<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin: 5px;
            width: calc(100% - 22px);
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #bd1892;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Admin Panel</h1>
    
    <h2>Add New Product</h2>
    <form action="add_product.php" method="POST">
    <input type="text" name="product_id" placeholder="Product Id" required>
        <input type="text" name="product_name" placeholder="Product Name" required>
        <input type="number" name="price" placeholder="Product Price" required>
        <input type="file"  name="product_image" placeholder="Product Image" required accept="image/png, image/jpg, image/jpeg">
        <input type="submit" value="Add Product">
    </form>

    <h2>Edit Product</h2>
    <form action="edit_product.php" method="POST">
        <input type="number" name="product_id" placeholder="Product ID" required>
        <input type="text" name="product_name" placeholder="New Product Name">
        <input type="number" name="price" placeholder="New Product Price">
        <input type="file"  name="product_image" placeholder="Product Image" required accept="image/png, image/jpg, image/jpeg">
        <input type="submit" value="Edit Product">
    </form>

    <h2>Delete Product</h2>
    <form action="delete_product.php" method="POST">
        <input type="number" name="product_id" placeholder="Product ID" required>
        <input type="submit" value="Delete Product">
    </form>

    <h2>Current Products</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "demowebsite";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }



                $result = $conn->query("SELECT * FROM makeup");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['product_image']}</td>
                          </tr>";
                }

                $result = $conn->query("SELECT * FROM skinproducts");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['product_image']}</td>
                          </tr>";
                }

                $result = $conn->query("SELECT * FROM hairs");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['product_image']}</td>
                          </tr>";
                }

                $result = $conn->query("SELECT * FROM brushesandtools");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['product_image']}</td>
                          </tr>";
                }

                $result = $conn->query("SELECT * FROM fragrance");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['product_id']}</td>
                            <td>{$row['product_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['product_image']}</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
