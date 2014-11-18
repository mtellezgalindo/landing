<?php 
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("America/Mexico_City");

/*
$host = "209.17.116.156";
$user = "munlogic";
$pass = "MuN10G1c.2014*";
$database = "munlogic_gayosso_crm";*/

$host = "localhost";
$user = 'root';
$pass = '123456';
$database = 'gayosso_crm_leads';


$nombre = $_POST['name1'];
$apellido = $_POST['apellido1'];
$lada = $_POST['lada1'];
$email = $_POST['email1'];
$phone = $_POST['phone1'];
$zip =  $_POST['zip1'];
$place = $_POST['place1'];
$fecha = date('Y-m-d H:i:s');



$conn3 = mysqli_connect($host, $user, $pass, $database);
	// Check connection
	if (!$conn3) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		
			$sql = "SELECT * FROM codigos_postales WHERE Codigo_Postal = $zip" ;
			
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			$estado = $row['Estado_de_la_republica'];
			$delegacion = $row['Delegacion_o_Municipio'];
			
			$sql2 = "SELECT * FROM plazas_gayosso WHERE Clave = $delegacion";
			$resultado = mysqli_query($conn, $sql2);
			$elemento = mysqli_fetch_array($resultado);
			echo $elemento['Plaza'];						

	}
	mysqli_close($conn3);

/*
if ($place == 'email'){

	// Create connection
	$conn = mysqli_connect($host, $user, $pass, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		if ($phone == '0000000000' or $phone == '1111111111' or $phone == '2222222222' or $phone == '33333333333' or $phone == '4444444444' or $phone == '55555555555' or $phone =='6666666666' or $phone == '7777777777' or $phone == '8888888888' or $phone == '9999999999' or $phone == '0123456789' or $phone == '9876543210') {
			echo "Ingresa un Teléfono Real";
		}else{
			$sql = "SELECT * FROM gayosso_crm_leads WHERE (emailaddress1 = '$email' AND address1_telephone1 = $phone)" ;
			
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);


			if ($row['emailaddress1'] == $email) {
						echo "¡Este email ya ha sido registrado!";
			} else {
				$sql = "INSERT INTO gayosso_crm_leads (firstname,emailaddress1,address1_telephone1,gys_codigopostalid,gys_fuenteweb,fecha) 
						VALUES ('".$nombre."', '".$email."','".$phone."', '".$zip."','".$place."','".$fecha."')";

				if (mysqli_query($conn, $sql)) {
				    echo "gracias";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

			}


		}
	}
	mysqli_close($conn);




	$servername = "67.227.172.217";
	$username = "momartco_munlogi";
	$password = "MuN10G1c.2014*";
	$dbname = "momartco_gayosso_crm";

	$conn_two = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn_two) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		if ($phone == '0000000000' or $phone == '1111111111' or $phone == '2222222222' or $phone == '33333333333' or $phone == '4444444444' or $phone == '55555555555' or $phone =='6666666666' or $phone == '7777777777' or $phone == '8888888888' or $phone == '9999999999' or $phone == '0123456789' or $phone == '9876543210') {
			//echo "Ingresa un Teléfono Real";
		}else{
			$sql = "SELECT * FROM gayosso_crm_leads WHERE (emailaddress1 = '$email' AND address1_telephone1 = '$phone')" ;
			$result = mysqli_query($conn_two, $sql);
			$row = mysqli_fetch_array($result);
			if ($row['emailaddress1'] == $email) {
						//echo "El usuario ya fue registrado!!!";
			} else {
				$sql = "INSERT INTO gayosso_crm_leads (firstname,emailaddress1,address1_telephone1,gys_codigopostalid,gys_fuenteweb,fecha) 
						VALUES ('".$nombre."', '".$email."','".$phone."', '".$zip."','".$place."','".$fecha."')";

				if (mysqli_query($conn_two, $sql)) {
				   // echo "Tus datos han sido registrados";
				} else {
				   // echo "Error: " . $sql . "<br>" . mysqli_error($conn_two);
				}

			}


		}
	}
	mysqli_close($conn_two);

} else {


	// Create connection
	$conn = mysqli_connect($host, $user, $pass, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		if ($phone == '0000000000' or $phone == '1111111111' or $phone == '2222222222' or $phone == '33333333333' or $phone == '4444444444' or $phone == '55555555555' or $phone =='6666666666' or $phone == '7777777777' or $phone == '8888888888' or $phone == '9999999999' or $phone == '0123456789' or $phone == '9876543210') {
			echo "Ingresa un Teléfono Real";
		}else{
			$sql = "SELECT * FROM gayosso_crm_leads WHERE (emailaddress1 = '$email' AND address1_telephone1 = $phone)" ;
			
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);


			if ($row['emailaddress1'] == $email) {
						echo "¡Este email ya ha sido registrado!";
			} else {
				$sql = "INSERT INTO gayosso_crm_leads (firstname,emailaddress1,address1_telephone1,gys_codigopostalid,gys_fuenteweb,fecha) 
						VALUES ('".$nombre."', '".$email."','".$phone."', '".$zip."','".$place."','".$fecha."')";

				if (mysqli_query($conn, $sql)) {
				  
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

			}


		}
	}
	mysqli_close($conn);



	$servername = "67.227.172.217";
	$username = "momartco_munlogi";
	$password = "MuN10G1c.2014*";
	$dbname = "momartco_gayosso_crm";

	$conn_two = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn_two) {
	    die("Connection failed: " . mysqli_connect_error());
	}else{
		if ($phone == '0000000000' or $phone == '1111111111' or $phone == '2222222222' or $phone == '33333333333' or $phone == '4444444444' or $phone == '55555555555' or $phone =='6666666666' or $phone == '7777777777' or $phone == '8888888888' or $phone == '9999999999' or $phone == '0123456789' or $phone == '9876543210') {
			//echo "Ingresa un Teléfono Real";
		}else{
			$sql = "SELECT * FROM gayosso_crm_leads WHERE (emailaddress1 = '$email' AND address1_telephone1 = '$phone')" ;
			$result = mysqli_query($conn_two, $sql);
			$row = mysqli_fetch_array($result);
			if ($row['emailaddress1'] == $email) {
						//echo "El usuario ya fue registrado!!!";
			} else {
				$sql = "INSERT INTO gayosso_crm_leads (firstname,emailaddress1,address1_telephone1,gys_codigopostalid,gys_fuenteweb,fecha) 
						VALUES ('".$nombre."', '".$email."','".$phone."', '".$zip."','".$place."','".$fecha."')";

				if (mysqli_query($conn_two, $sql)) {
				   // echo "Tus datos han sido registrados";
				} else {
				   // echo "Error: " . $sql . "<br>" . mysqli_error($conn_two);
				}

			}


		}
	}
	mysqli_close($conn_two);


}*/
?>