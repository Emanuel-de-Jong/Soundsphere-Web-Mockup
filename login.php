<?php
    setcookie("logged-in", true, time() + 3600);
    header("Location: /");
?>