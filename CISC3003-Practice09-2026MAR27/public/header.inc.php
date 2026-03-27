<?php
require __DIR__ . '/data.inc.php';
$items = [
    ['file' => $file1, 'title' => $title1, 'quantity' => $quantity1, 'price' => $price1],
    ['file' => $file2, 'title' => $title2, 'quantity' => $quantity2, 'price' => $price2],
    ['file' => $file3, 'title' => $title3, 'quantity' => $quantity3, 'price' => $price3],
    ['file' => $file4, 'title' => $title4, 'quantity' => $quantity4, 'price' => $price4],
];
$subtotal = 0;
foreach ($items as $it) {
    $subtotal += $it['quantity'] * $it['price'];
}
$shipping = ($subtotal > 100) ? 0 : 10;
$grand = $subtotal + $shipping;
function money($n) { return '$' . number_format($n, 2); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CISC3003 Practice 09</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div>
  <header>
    <div>
     <h1 class="mdl-layout-title"><span>CRM Admin</span></h1>
      <div></div>
      <div>
        <label>account_box</label>
        <div>Messages</div>
        <label>notifications</label>
         <div>Notifications</div>
        <label>
          <i>search</i>
        </label>
        <div>
          <input type="text" name="sample">
        </div>
      </div>
    </div>
  </header>
  <div>
       <div class="profile">
           <img src="images/profile.jpg" class="avatar">
           <h4>John Locke</h4>
           <span>johnlocke@example.com</span>
       </div>
    <nav>
        <a href="#"><i class="material-icons" role="presentation">dashboard</i> Dashboard</a>
        <a href="#"><i class="material-icons" role="presentation">message</i> Messages</a>
        <a href="#"><i class="material-icons" role="presentation">event</i> Tasks</a>
        <a href="#"><i class="material-icons" role="presentation">call</i> Orders</a>
        <a href="#"><i class="material-icons" role="presentation">settings</i> Configure</a>
        <a href="#"><i class="material-icons" role="presentation">view_list</i> Catalog</a>
        <a href="#"><i class="material-icons" role="presentation">contacts</i> Customers</a>
        <a href="#"><i class="material-icons" role="presentation">insert_chart</i> Analytics</a>
    </nav>
  </div>
