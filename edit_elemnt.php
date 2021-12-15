<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = $db->prepare("UPDATE element SET name = :name, group = :group, atomic_no = :atomic_no, atomic_weight= :atomic_weight, description= :description WHERE id = :id ");

			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':group', $_POST['group']);
			$sql->bindParam(':atomic_no', $_POST['atomic_no']);
			$sql->bindParam(':atomic_weight', $_POST['atomic_weight']);
			$sql->bindParam(':description', $_POST['description']);
			$sql->bindParam(':id', $_GET['id'], PDO::PARAM_INT);

			$_SESSION['message'] = ( $sql->execute()) ? 'Element edited successfully' : 'Something went wrong. Cannot edit axie.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
		
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: ../index.php');
	
?>