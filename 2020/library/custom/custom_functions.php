<?php  
/**
 * Remove size from product description
 * @param  [type] $description [description]
 * @return [type]              [description]
 */
function removeSizeFromDesc($description, $stringtoremove){
	// Remove single and double qoutes from string
	$description = str_replace(array("'", '"'), "", $description);

	// Modify the description to upper and spaceless
	$text = strtoupper(str_replace(" ", "", $description));
	
	// Count the number of times X appears
	$xCount = substr_count($text, $stringtoremove);

	// If description has X
	if($xCount > 0){	

		// Variable to store 3 chars fro left and right of X
		$lhsStr = ''; 
		$rhsStr = '';
		
		// Loop number of times x appears
		for($n=1; $n <= $xCount; $n++){
			// Get 3 chars from left pf X 
			for($i = 1; $i <= 3; $i++){
				$posX = strpos($text, $stringtoremove);
				$charsToCheck = substr($text, ($posX-$i), $i); 
				if(is_numeric($charsToCheck)){
					$lhsStr = $charsToCheck;
				}
				else break;
			}

			// Get 3 chars from right of X
			for($i = 1; $i <= 3; $i++){
				$posX = strpos($text, $stringtoremove);
				$charsToCheck = substr($text, ($posX+$i), 1); 
				if(is_numeric($charsToCheck)){
					$rhsStr .= $charsToCheck;
				}
				else break;
			}

			// Validate the left or right string for numeric
			if(is_numeric($lhsStr) && is_numeric($rhsStr)) break;	
			else{
				// Get the position of $nth X
				$nPosX = strpos($text, $stringtoremove);
				$text = substr($text, $nPosX+1);
				continue;
			}
		}
		
		// Size array
		$sizeArray = array(
			$lhsStr.$stringtoremove.$rhsStr, 
			$lhsStr." ".$stringtoremove." ".$rhsStr, 
			$lhsStr." ".$stringtoremove.$rhsStr, 
			$lhsStr.$stringtoremove." ".$rhsStr
		);

		// Remove more than one space from description
		$description = preg_replace('/\s\s+/', ' ', $description);

		// Loop through soze array
		foreach($sizeArray as $size){
			if(strpos($description, $size) !== false){
				$description = str_replace($size, '', $description);		
				break;
			}
			else continue;
		} 
		$result = $description;	
	}
	else $result = $description;

	return $result;
}
?>