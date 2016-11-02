<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <ul id="nav">
 <li><a href="index.php" <?php if ($currentPage == 'index.php') {
 echo 'id="here"';} ?>>Home</a></li>
 <li><a href="form.php" <?php if ($currentPage == 'form.php') {
 echo 'id="here"';} ?>>Form</a></li>
 </ul>