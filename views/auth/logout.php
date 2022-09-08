<?php

setcookie("login", false, time() - 60 * 60 * 24 * 10);

alert("Berhasil Logout");
redirect("index.php");