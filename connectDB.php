<?php

// connesione al DB usando XAMPP

$hostname = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "palestra";

// Connessione al database
$conn = new mysqli($hostname, $username, $dbpassword, $dbname);

// Verifica della connessione
if ($conn===false) {
    die("Connessione fallita:  " . $conn->connect_error);
}

echo "Connessione riuscita:  ".$conn->host_info;  


$nome = $_POST['fname'];
$cognome = $_POST['fcognome'];
$email = $_POST['femail'];
$telefono = $_POST['fphone'];
$cf = $_POST['fcf'];  //codice fiscale
$password = $_POST["fpass"];
$certificato = $_POST["fcertificato"];


$sql = "INSERT INTO cliente VALUES ('$nome', '$cognome', '$email', '$telefono', '$cf', '$password', '$certificato')";

if ($conn->query($sql) === TRUE) {
    
    echo " Dati inseriti correttamente ";
} else {
    
    echo " Errore durante l'inserimento dei dati: " .$conn->error;
}


// Chiudo la connessione
$conn->close();

?>