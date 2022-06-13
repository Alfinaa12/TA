<?php 
session_start();

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_SESSION['user_name'])) {
	header("Location: home.php");
}
////////////////////////////////// ENGINE TANPA DATABASE //////////////////////
$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

if (isset($uname) && isset($pass)) {
	if ($uname == 'fina' && $pass == 'fina123') {
		$_SESSION['user_name'] = $uname;
		header("Location: home.php");
		exit();
	}
}

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}

////////////////////////////////// ENGINE PAKAI DATABASE //////////////////////
// include "db_conn.php";

// if (isset($_POST['uname']) && isset($_POST['password'])) {



// 	$uname = validate($_POST['uname']);
// 	$pass = validate($_POST['password']);

// 	if (empty($uname)) {
// 		header("Location: index.php?error=User Name is required");
// 	    exit();
// 	}else if(empty($pass)){
//         header("Location: index.php?error=Password is required");
// 	    exit();
// 	}else{
// 		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

// 		$result = mysqli_query($conn, $sql);

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//             if ($row['user_name'] === $uname && $row['password'] === $pass) {
//             	$_SESSION['user_name'] = $row['user_name'];
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['id'] = $row['id'];
//             	header("Location: home.php");
// 		        exit();
//             }else{
// 				header("Location: index.php?error=Incorect User name or password");
// 		        exit();
// 			}
// 		}else{
// 			header("Location: index.php?error=Incorect User name or password");
// 	        exit();
// 		}
// 	}
	
// }else{
// 	header("Location: index.php");
// 	exit();
// }