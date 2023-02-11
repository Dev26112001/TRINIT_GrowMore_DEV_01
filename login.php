<?php
// login.php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$users = [
  [
    "username" => "user1",
    "password" => "pass1"
  ],
  [
    "username" => "user2",
    "password" => "pass2"
  ]
];

foreach ($users as $user) {
  if ($username == $user['username'] && $password == $user['password']) {
    $_SESSION['username'] = $username;
    header("Location: success.php");
    exit;
  }
}

echo '<div class="error">Incorrect username or password.</div>';

