<?php 
$url = "https://www.googleapis.com/oauth2/v1/certs";
 $file = file_get_contents($url);
$certs = json_decode($file, true);



function Google_Verifier_Pem($pem) {
	
 return openssl_x509_read($pem);

}




function verify($data, $signature, $public_key) 
  { 
    $hash = defined("OPENSSL_ALGO_SHA256") ? OPENSSL_ALGO_SHA256 : "sha256"; 
    $status = openssl_verify($data, $signature, $public_key, $hash); 
    if ($status === -1) { 
      throw new Google_Auth_Exception('Signature verification error: ' . openssl_error_string()); 
    } 

	 return $status === 1; 
  } 
	
	
	
$jwt = $Replace_JWT_Token_Here;

  $segments = explode(".", $jwt);

$signed = $segments[0] . "." . $segments[1];

function urlsafeB64Decode($input)
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $input .= str_repeat('=', $padlen);
        }
        return base64_decode(strtr($input, '-_', '+/'));
    }
 
$signature = urlSafeB64Decode($segments[2]);







	
	
foreach ($certs as $keyName => $pem) {
	
      $public_key = Google_Verifier_Pem($pem);
    
	if (verify($signed, $signature, $public_key)) {
        $verified = true;
        break;
      }else{
		  $verified = false;
		  
	  }
      
}
var_dump($public_key);
  echo $public_key[5];
  var_dump(get_defined_vars());
?>
