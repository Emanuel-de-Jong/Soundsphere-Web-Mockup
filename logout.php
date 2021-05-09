<?php
    setcookie("logged-in", false, time() - 3600);
    header("Location: /");
?>