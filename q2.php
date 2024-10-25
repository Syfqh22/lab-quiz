<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $month = $_POST['month'];
    $sales_amount = $_POST['sales_amount'];

    //commission
    if ($sales_amount <= 2000) {
        $commission = $sales_amount * 0.05;
    } elseif ($sales_amount <= 5000) {
        $commission = $sales_amount * 0.06;
    } elseif ($sales_amount <= 7000) {
        $commission = $sales_amount * 0.08;
    } else {
        $commission = $sales_amount * 0.15;
    }

    //output
    echo "<table style='border-collapse: collapse; width: 50%;'>";
    echo "<tr><th colspan='3' style='text-align: left; border-bottom: 1px solid #000; padding-bottom: 5px;'>Sales Commission</th></tr>";
    echo "<tr><td style='padding: 5px; width: 150px;'>ID</td><td style='padding: 5px; width: 10px;'>:</td><td style='padding: 5px;'>$id</td></tr>";
    echo "<tr><td style='padding: 5px;'>Name</td><td style='padding: 5px;'>:</td><td style='padding: 5px;'>$name</td></tr>";
    echo "<tr><td style='padding: 5px;'>Month</td><td style='padding: 5px;'>:</td><td style='padding: 5px;'>$month</td></tr>";
    echo "<tr><td style='padding: 5px;'>Sales Amount</td><td style='padding: 5px;'>:</td><td style='padding: 5px;'>RM " . number_format($sales_amount, 2) . "</td></tr>";
    echo "<tr><td style='padding: 5px;'>Sales Commission</td><td style='padding: 5px;'>:</td><td style='padding: 5px;'><strong>RM " . number_format($commission, 2) . "</strong></td></tr>";
    echo "</table>";
}
?>
