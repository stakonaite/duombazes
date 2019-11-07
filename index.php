<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person";

try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbntry {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print $sql . "<br>" . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$order_email = $_POST['order_email'];
$pick_flower = $_POST['pick_flower'];
$flower_quantity = $_POST['flower_quantity'];
$flower_pack = $_POST['flower_pack'];

if (empty($order_email) || empty($flower_quantity)) {
print $status = "Inputs are empty!";
} elseif (filter_var($order_email, FILTER_VALIDATE_EMAIL)) {
print $status = "Enter valid email";
} else {
$sql = "INSERT INTO fl_order (order_email, pick_flower, flower_quantity, flower_pack) VALUES (:order_email, :pick_flower, :flower_quantity, :flower_pack)";
$stmt = $conn->prepare($sql);
$stmt->execute(['order_email' => $order_email, 'pick_flower' => $pick_flower, 'flower_quantity' => $flower_quantity, 'flower_pack' => $flower_pack]);
print $status = "Your message was sent";
}
}

function getFlowers() {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geles";

try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbntry {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print $sql . "<br>" . $e->getMessage();
}

$allFlowers = $pdo->query("SELECT * FROM flowers");
$allFlowers->execute();
$flowerArray = $allFlowers->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $value) {
print '<option value="' . $value['id_flowers'] . '">' . $value['pick_flower'] . "</option>";
}
$pdo = null;
}

function getOrders(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geles";

try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbntry {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
print $sql . "<br>" . $e->getMessage();
}
}
$allOrders = $pdo->query("SELECT * FROM `fl_order`);
    $allOrders->execute();
    $orderArray = $allOrders->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $value) {
        
print '<tr>
<td>' . $value['order_id']'</td>
</tr>'
}
    

?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie = edge">
        <title>Document</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
    </head>
<body>
    <div class="form-v6">
        <div class="page-content">
            <div class="form-v6-content">
                <form class="form-detail" action="#" method="post">
<h2>Order</h2>
<div class = "form-row">
<input type = "text" name = "order_email" id = "full-email" class = "input-text" placeholder = "e-mail">
</div>
<div class = "form-row">
<select name = "pick_flower" class = "input-text">
<?php $getFlowers();
?>
</select>
</div>
<div class="form-row">
    <input type="number" name="flower_quantity" class="input-text" placeholder="quantity">
</div>
<div class="form-row">
    <select name="flower_pack" class="input-text">
        <option value="box">box</option>
    </select>
</div>
<div class="form-row-last">
    <input type="submit" name="order" class="register" value="order">
</div>
</form>
<table class="table table- bg-info">
    <thead>
        <tr>
            <th scope="col">order:</th>
            <th scope="col">email:</th>
            <th scope="col">flower:</th>
            <th scope="col">quantity:</th>
            <th scope="col">pack:</th>
        </tr>
    </thead>
    <tbody>
<?php allOrders(); ?>
    </tbody>
</table>
</body>
</html>