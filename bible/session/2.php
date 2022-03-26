<?php
// second page
// re-create the previous session
session_start();
// print the value of the session variable
// returns 'deathsbane'
echo $_SESSION['username'];