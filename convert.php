<?php 
    //Remember to change the directory to CHMOD 777
    //If you want to verify information of your .pem go to Linux terminal and execute
    //openssl x509 -in /dir_of_the_cert.pem -noout -text
    
		$open_pfx = openssl_pkcs12_read(file_get_contents('certificate.pfx'), $p12, 'password');
		if ($open_pfx) {
			$pfx_to_pem = openssl_x509_parse($pem['cert']);
			$filename = 'whs_teste.pem';
			$create = fopen($filename, 'w');
			fwrite($create, $pem['cert'].$pem['pkey']);
			fclose($create);
		} else {
			echo openssl_error_string();
		}
?>
