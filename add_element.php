<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = $db->prepare("INSERT INTO element (name, group, atomic_no, atomic_weight, description) VALUES (:name, :group, :atomic_no, :atomic_weight, :description)");

			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':group', $_POST['group']);
			$sql->bindParam(':atomic_no', $_POST['atomic_no']);
			$sql->bindParam(':atomic_weight', $_POST['atomic_weight']);
			$sql->bindParam(':description', $_POST['description']);
			
			$_SESSION['message'] = ( $sql->execute()) ? 'Element added successfully' : 'Something went wrong. Cannot add element.';	   
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