<?php

session_start();
session_destroy();
header("Location: /Nevula/public/index.php?slug=LandingController");
exit;