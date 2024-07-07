<?php

class Mailer {

    public static function KirimEmail($nama_pengirim, $from, $to, $subject, $message)
    {
        try {
            $headers = "From: $nama_pengirim <$from>" . "\r\n";
            $headers .='Reply-To: '. $to . "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
            
            $hasil["terkirim"] = true;
    
            mail($to,$subject,$message, $headers);   
        } catch (Exception $e) {
          $hasil["terkirim"] = false;
          $hasil["error"] = $e->getMessage();
        } finally {
            return $hasil;  
        }
    }
}

?>