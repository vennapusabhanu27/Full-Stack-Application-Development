<!DOCTYPE html>
<html>
<head>
    <title>Customer Order History</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Customer Order History</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Date</th>
        </tr>

        <?php
        $conn = new mysqli("localhost","root","","ecommerce");

        if($conn->connect_error){
            die("<tr><td colspan='5' class='no-data'>Database Connection Failed</td></tr>");
        }

        $sql = "SELECT c.name, p.product_name, o.quantity, o.total_amount, o.order_date
                FROM Orders o
                JOIN Customers c ON o.customer_id = c.customer_id
                JOIN Products p ON o.product_id = p.product_id
                ORDER BY o.order_date DESC";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $total = number_format($row['total_amount'], 2);
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['product_name']}</td>
                        <td>{$row['quantity']}</td>
                        <td>₹{$total}</td>
                        <td>{$row['order_date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5' class='no-data'>No Orders Found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>

</body>
</html>