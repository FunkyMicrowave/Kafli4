<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<?php
if ($currentPage == 'index.php') {
  $title = "Home"; }
else {
     $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
     $title = ucfirst($title);
}