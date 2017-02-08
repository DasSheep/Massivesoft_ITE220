<?php 																								//Created by Trin
	require('config.php');
	$memberID = trim($_GET['x']);																	//Collect acitvation from the url
	$active = trim($_GET['y']);
	if(is_numeric($memberID) && !empty($active))													//If ID and token is valid carry on.
		{																							//Updates activation status of the row that match the activation to Yes.
			$stmt = $db->prepare("UPDATE members SET active = 'Yes' WHERE memberID = :memberID AND active = :active");
			$stmt->execute(array(':memberID' => $memberID,':active' => $active));
			if($stmt->rowCount() == 1){																//If the row was updated; Redirect the user to login page
				header('Location: ../secure/login.php?action=active');								
				exit;
			}else 	{																				//Else will throw error.
						echo "Your account could not be activated.(Invalid activation token/Malformed request)"; 
					}
		}
?>