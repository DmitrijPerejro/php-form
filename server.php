<?php
  echo "name: " . $_POST["name"];
  echo "<br>";
  echo "email: " . $_POST["email"];
  echo "<br>";
  echo "password: " . $_POST["password"];
  echo "<br>";
  echo "age: " . $_POST["age"];
  echo "<br>";
  echo "sex: " . $_POST["gender"];
  echo "<br>";
  echo "skills: ";
  foreach ($_POST["skills"] as $skill) {
    echo "$skill ";
  }
  echo "<br>";
  echo "comment: " . $_POST["comment"];