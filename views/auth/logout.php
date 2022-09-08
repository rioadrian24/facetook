<?php

session_start();
session_destroy();

alert("Berhasil Logout");
redirect("index.php");
