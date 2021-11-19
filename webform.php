<?php
$message_sent = false; 
if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            //Submit the form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPhone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "info@consepril.com";
    $subject = "Solicitud desde sitio web";
    $body = "";

    $body .= "Nombre: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n"; 
    $body .= "Teléfono: ".$userPhone. "\r\n";
    $body .= "Mensaje: ".$message. "\r\n";

    mail($to,$subject,$body);

    $message_sent = true;
}

    
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
<link rel="stylesheet" href="assets/css/owl.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
        <?php
        if($message_sent):
         ?>
            <h3> Nos pondremos en contacto a la brevedad.</h3>

         <?php
        else:
         ?>

<div class="col-md-12">
            <div class="contact-form">
        <form action="webform.php" method="POST">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y apellido" tabindex="1" required>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" tabindex="3" required>
            </div>
            <div class="col-lg-12">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Detalle lo más posible de que manera podemos ayudar: tipo de servicio requerido, en qué ciudad o ubicación, etc." tabindex="4"></textarea>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="border-button">Envíar mensaje</button>
        </div>
            </div>
        </form>
    </div>
         </div>
<?php
    endif;
    ?>
</body>

</html>

