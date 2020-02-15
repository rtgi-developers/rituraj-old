<?php 
class Helpers{
	/**
	 * To hash OMS users password
	 * @param  [string] $password [user password]
	 * @return [type]           [description]
	 */
	public function hashPassword($password){
		$salt1 = "qm&h*"; // Salt 1
		$salt2 = "pg!@";  // Salt 2
		return hash('ripemd128', "$salt1$password$salt2");
	}

	/**
	 * Show message to alert users processing status
	 * @param  [string] $type  [primary, secondary, success, danger, warning, info, light, dark]
	 * @param  [string] $msg   [Response mesage]
	 * @param  [string] $title [Title of message or alert]
	 * @return [object]        [Bootstrap 4 alerts - Bootstrap must be included]
	 */
	public function showMsg($type, $msg, $title = null){
		$html = '
			<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
				<!-- Close button -->
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
		';

		// Title is optional
		if(isset($title)){
			$html .= '		
					<!-- Message title -->
					<h4 class="alert-heading my-0">'.$title.'</h4><hr>
			';
		}

		// Message is mandatory
		$html .= '
				<!-- Message content -->
				<span class="text-justify">'.$msg.'</span>
			</div>		
		';

		// Return
		return $html;
	}

}