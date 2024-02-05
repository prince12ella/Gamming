<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "votre boite mail : moi@gmail.com";
  $subject = "Nouveau message de $name";
  $headers = "From : $email";
  $messagebody = "nom : $name\n email : $email \n $message";
  // envoyer le mail en utilisant la fonction mail()
  $succes = mail($sto, $subject , $messagebody , $headers);
  if($succes){
    echo"votre message a bien ete transmis"
  }else{
    echo " une erreur s'est produite lors de l'envois du message";
  }

}


?>