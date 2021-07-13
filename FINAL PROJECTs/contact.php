<?php include './navbar.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/contact.css">
    <title>Document</title>
</head>
<body>
     <div class="contact-box">
         <form action="" method="post">
            <input type="text" class="input-field" placeholder="Your Name" name="name">             
            <input type="email" class="input-field email" placeholder="Your Email" name="email">             
            <input type="text" class="input-field email Contact" placeholder="Your Contact No" name="contact">             
            <input type="text" class="input-field" placeholder="Your Address" name="address">             
            <input type="text" class="input-field" placeholder="Subejct"name="subject">             
            <textarea type="text" class="input-field textarea" placeholder="Your Message" name="message"> </textarea>    
            <input type="submit" value="Submit" class="btn" name="submit">     
         </form>
     </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{ 
    $sql=mysqli_query($db,"INSERT INTO `help`(`id`, `Name`, `email`, `contact no`, `Address`, `Subject`, `Message`) VALUES ('','$_POST[name]','$_POST[name]','$_POST[name]','$_POST[name]','$_POST[name]','$_POST[name]')");

    if($sql== true){
    ?> 
        <script type="text/javascript">
          alert("Submited Successfully")
          window.location="help.php"
        </script>
    <?php
  }
  else{
    ?> 
        <script type="text/javascript">
          alert("Submited failed")
          window.location="help.php"
        </script>
    <?php

  }
}
?>