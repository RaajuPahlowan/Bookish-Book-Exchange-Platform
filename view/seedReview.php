<?php
require('../model/db.php');
$db = new db();
$conn = $db->Connect();
$db->SeedReview($conn);

?>