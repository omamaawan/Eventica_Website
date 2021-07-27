<!DOCTYPE html>
<html>

<head>
    <title>Eventica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    include('nav.php');
   
    include('Backend/check_login.php'); ?>

     <section class="py-5">
        <h3>Contact Us</h3>
        <address>
            Gmail <a href="info@eventica.pk">info@eventica.pk</a>.<br>
            Follow us on insta <a href="https://instagram.com/eventica_pk?igshid=18ojymjabyr4c">Insta</a>.<br>
            Follow us on Facebook<a href="https://www.facebook.com/EventicaPk/">Facebook</a>.<br>
            <p>WhatsApp at: 0333-5960661</p>
        </address>
        </section>


        <footer>
            <h5 class="p-2 bg-dark text-white"> Copyright 2020 Eventica, All Right Reserved, Designed and developed by
                Omama Irshad & Ali Arman</h5>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

    </html>