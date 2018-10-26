    <!DOCTYPE html>
<html lang="en">
    <head>
           <title><?php echo $this->template->getTitle(); ?></title>   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!--Css generales para login-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style-general-login.css">
        

        <!-- iconos con fontawsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
  <?php echo $header; ?>  
  <?php echo $content; ?>
  <?php echo $footer; ?>
</body>
</html>