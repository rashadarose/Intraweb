<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
	$result;
	if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){

		$result = true;
	}
	else{

		$result = false;
	}
	return $result;

}


function invalidUid($username){

	$result;
	$pattern = '/^[a-zA-Z0-9]*$/';
	$holder = !preg_match($pattern, $username);
	if($holder){

       $result = true;
	}
	else {

		$result = false;
	}
	return $result;

}


function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

		$result = true;
	}
	else{

		$result = false;
	}
	return $result;

}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if($pwd !== $pwdRepeat){

		$result = true;
	}
	else{

		$result = false;
	}
	return $result;
}


function uidExist($conn, $username, $email) {
$sql = "SELECT * FROM tblLogin WHERE Uid = ? OR  email = ?;";

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location:../signup.php?error=stmtfailed");
		exit();

	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);

}



function createUser($conn, $name, $email, $username, $pwd){
	/*Destroy existing session before signuo new users
	session_start();
	session_unset();
	session_destroy();*/
	$sql = "INSERT INTO users (usersName, email, Uid, password) VALUES (?,?,?,?)";
	/* prepared statement*/
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location:../signup.php?error=stmtfailed");
		exit();

	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); /*encrypt Pwd*/

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $pwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location:../login.php?error=none");
	exit();

}

function emptyInputLogin($username, $pwd) {
	$result;
	if( empty($username) || empty($pwd)  ){

		$result = true;
	}
	else{

		$result = false;
	}
	return $result;

}

function loginUser($conn, $username, $pwd){

$uidExists = uidExist($conn, $username, $username);


	if($uidExists === false){
		header("location:../login.php?error=wronglogin");
		exit();
	}

	/*For a Hashed password use this*/

	/*$pwdHashed = $uidExists["password"];
	$checkPwd = password_verify($pwd, $pwdHashed);*/


	/*if($checkPwd === false){
		header("location:../login.php?error=wrongpassword");
		exit();
	}
	else if($checkPwd === true){
		session_start();
		$SESSION["usersId"] = $uidExists["usersId"];
		$SESSION["Uid"] = $uidExists["Uid"];
		header("location:../../../index.php");
		exit();
	}*/

	if($pwd !== $uidExists["password"]){
		header("location:../login.php?error=wrongpassword");
		exit();
	}
	else if($pwd === $uidExists["password"]){
		session_start();
		session_regenerate_id();
		$_SESSION["usersId"] = $uidExists["usersId"];
		$_SESSION["Uid"] = $uidExists["Uid"];
		$_SESSION["fullname"] = $uidExists["fullname"];
		//header("location:../login.php?". $_POST["uid"] );
	    header("location:../table/home.php");
		exit();
	}





}