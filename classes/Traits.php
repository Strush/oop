
<?php
// se folosec pentru nu a repeta codul

trait AJAXSecurity {
    public function secret_key() {
        return 'x-1345';
    }
}

class CRequest {
    use AJAXSecurity;
    public function send_request(){
        $secret = $this->secret_key();
        echo '</br> Secret: '. $secret . '</br>';
        echo 'trait on develop branch';
    }
}

class CDecode {
    use AJAXSecurity;
    public function decode_data(){
        $secret = $this->secret_key();
        echo $secret;
    }
}

$ex = new CRequest();
$ex->send_request();