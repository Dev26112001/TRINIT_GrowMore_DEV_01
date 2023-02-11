<!-- success.php -->

<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.html");
  exit;
}

echo '<h3>Welcome, ' . $_SESSION['username'] . '</h3>';