<?php>
Plugin Name: Demoplug
Plugin URI:
Description: Demoplug
Author: Eyob Goitom
Author URI: 
Version: 1.0
*/

function registration_form( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio ) {
    echo '
    <style>
    div {
    	margin-bottom:2px;
	}
	
	input{
		margin-bottom:4px;
	}
	</style>
	';

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
	<div>
	<label for="username">Username <strong>*</strong></label>
	<input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
	</div>
	
	<div>
	<label for="password">Password <strong>*</strong></label>
	<input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
	</div>
	
	<div>
	<label for="email">Email <strong>*</strong></label>
	<input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
	</div>
	
	<div>
	<label for="website">Website</label>
	<input type="text" name="website" value="' . ( isset( $_POST['website']) ? $website : null ) . '">
	</div>
	
	<div>
	<label for="firstname">First Name</label>
	<input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
	</div>
	
	<div>
	<label for="website">Last Name</label>
	<input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
	</div>
	
	<div>
	<label for="nickname">Nickname</label>
	<input type="text" name="nickname" value="' . ( isset( $_POST['nickname']) ? $nickname : null ) . '">
	</div>
	
	<div>
	<label for="bio">About / Bio</label>
	<textarea name="bio">' . ( isset( $_POST['bio']) ? $bio : null ) . '</textarea>
	</div>
	<input type="submit" name="submit" value="Register"/>
	</form>
	';
}
// function registration_validation( $username, $password, $email, $website, $firstname, $lastname ){

// 	global $reg_errors;
// 	$reg_errors = new WP_Error;
// 	if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
//     $reg_errors->add('field', 'Required form field is missing');
// 	}

// 	if ( 4 > strlen( $username ) ) {
//     $reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
// 	}

// 	if ( username_exists( $username ) )
//     $reg_errors->add('user_name', 'Sorry, that username already exists!');

// 	if ( ! validate_username( $username ) ) {
//     $reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
// 	}

	
	

// } 

?>