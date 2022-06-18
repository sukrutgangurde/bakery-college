<?php
require 'head.php';
pg_query("delete from tbcart where cartid=" . $_GET['cartid']);
header("location:viewcart.php");
