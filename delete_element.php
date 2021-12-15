<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['delete'])){
		$database = new Connection();
		$db = $database->open();
		try{

			$sql = $db->prepare("DELETE FROM element WHERE id = :id");
            $sql->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
			$_SESSION['message'] = ( $sql->execute()) ? 'Element deleted successfully': 'Something went wrong. Cannot delete axie.';	
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: ../index.php');
?>