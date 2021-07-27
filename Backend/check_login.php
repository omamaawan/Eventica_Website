<?php
if (!isset($_SESSION["login"])) {
    echo "<script>
                alert('Please log in first!');
                window.location.href='index.php';
                </script>";
    exit();
}