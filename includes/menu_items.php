<?php
$sql = 'SELECT * FROM menu_items';
$result = mysqli_query($conn, $sql);
$menu_items = mysqli_fetch_all($result, MYSQLI_ASSOC);