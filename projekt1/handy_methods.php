<?php

// allt möjlgt viktigt som vi använder ofta, sessionshantering, form validation, etc.

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>