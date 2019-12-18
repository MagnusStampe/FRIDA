<?php
require_once(__DIR__ . '/connect.php');
error_reporting(0);
?>
<p>Payment send</p>
<a href="../admin.php">Go back to admin page</a>
<?php
$cQuery  = 'CALL makeMonthlyPayments()';
$stmt = $pdo->prepare($cQuery);
$stmt->execute();
