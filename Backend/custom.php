<!DOCTYPE html>
<html>
<head>
<tittle> </tittle>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="../css/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
 
</head>


<style>


</style>


<body>

<?php 

include("../nav.php");
?>

<section class="my-5 make-yr-frm">
<div class="container">
<div class="Customize">
<h1>Make Your Own Trip</h1> 
			

<form name="book_tour" id="book-tour" action="customhandler.php" onSubmit="return checkcustom();">
<div class="form-group">
    <label for="Username">Username</label>
    <input type="text" class="form-control" placeholder="Username" id="username">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="phone">Phone Number:</label>
    <input type="text" class="form-control" placeholder="Enter phone number" id="phone">
  </div>
  <div class="form-group">
    <label for="Duration Date">Start Date:</label>
    <input type="date" class="form-control" placeholder="Enter Start Date" id="date">
  </div>
   <div class="form-group">
    <label for="Duration Date">End Date:</label>
    <input type="date" class="form-control" placeholder="Enter Start Date" id="date">
  </div>

  
   <div class="form-group">
    <label for="Number Of Adults">Number Of Adults:</label>
    <input type="number" class="form-control" placeholder="Enter Number Of Duration" id="adults">
  </div>
  <div class="form-group">
    <label for="Number Of Children">Number Of Children(3 to 10 years):</label>
    <input type="text" class="form-control" placeholder="Enter Number Of of Children" id="children">
  </div>
   
  <div class="form-group">
    <label for="Starting-Ending City ">Starting-Ending City</label>
    <input type="text" class="form-control" placeholder="e.g Karachi" id="City">
  </div>
  <div class="form-group">
    <label for="Places You Want To Go ">Places You Want To Go</label>
    <input type="text" class="form-control" placeholder="e.g Naran" id="places">
  </div>

  <div class="form-group">
    <label for="Tour Type">Tour Type</label>
    <!-- <input type="text" class="form-control" placeholder="Economy" id="type"> -->
   
  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Plan Mine</button>
</form>
		</div>
        </div>
        </section>
        
 <section class="py-5">
 <div class="container">
<h3>Contact Us</h3>
<address>
Gmail <a href="info@eventica.pk">info@eventica.pk</a>.<br> 
Follow us on insta <a href="https://instagram.com/eventica_pk?igshid=18ojymjabyr4c">Insta</a>.<br>
Follow us on Facebook<a href="https://www.facebook.com/EventicaPk/">Facebook</a>.<br>
<p>WhatsApp at:  0333-5960661</p>
</address>
</div>
</section>

<script>


for(int i=1; i<=31; i++)
{
  document.getElementById("duration").write = "<option value=' " + i-1 + " '> " + i + "</option>";
}

</script>

<footer>
<h5 class="p-2 bg-dark text-white"> Copyright 2020 Eventica, All Right Reserved, Designed and developed by Omama Irshad & Ali Arman</h5>
</footer>


</body>
</html>