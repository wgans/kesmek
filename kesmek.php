<?php
//error_reporting(0);

function register($password,$email,$fullname,$mac,$socks) {

$c = curl_init(); 
    curl_setopt($c, CURLOPT_URL, "http://cashmemoney.com/admin/app/regester.php?value=Adam"); 
    curl_setopt($c, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($c, CURLOPT_PROXY, $socks);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_HTTPHEADER, array(''));
    curl_setopt($c, CURLOPT_POSTFIELDS, 'mac_time='.$mac.'&passwordSign='.$password.'&fullName='.$fullname.'&tel=NoTel&emailSign='.$email.'@gmail.com&');
    curl_setopt($c, CURLOPT_HEADER, 0);
    curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19');
   $response =  curl_exec($c);
    curl_getinfo($c); 
    return $response;
}

function kontol($password,$email,$socks) {
$ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://cashmemoney.com//admin/app/getData.php?value=Adam"); 
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $socks);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(''));
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'passwordLogIn='.$password.'&emailLogIn='.$email.'@gmail.com&');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19');
   $response =  curl_exec($ch);
   curl_close($ch);
   return $response;
  
}


function invite($password,$email,$code,$socks) {
$ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://cashmemoney.com//admin/app/send_referal.php?value=Adam"); 
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $socks);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(''));
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'passwordLogIn='.$password.'&code_share_referal='.$code.'&emailLogIn='.$email.'@gmail.com&');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19');
   $response =  curl_exec($ch);
   curl_close($ch);
   return $response;
  
}

function test($password,$email,$code) {
$ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://cashmemoney.com//admin/app/send_referal.php?value=Adam"); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(''));
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'passwordLogIn='.$password.'&code_share_referal='.$code.'&emailLogIn='.$email.'@gmail.com&');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 4.2.1; en-us; Nexus 5 Build/JOP40D) AppleWebKit/535.19 (KHTML, like Gecko; googleweblight) Chrome/38.0.1025.166 Mobile Safari/535.19');
   $response =  curl_exec($ch);
   curl_close($ch);
   return $response;
  
}

function hurufangka($length)
        {
            $data = 'abcdefghijklmnopqrstuvwxyz1234567890';
            $string = '';
            for($i = 0; $i < $length; $i++) {
                $pos = rand(0, strlen($data)-1);
                $string .= $data{$pos};
            }
            return $string;
        }   

function angka($length)
        {
            $data = '12345amhjgd67890';
            $string = '';
            for($i = 0; $i < $length; $i++) {
                $pos = rand(0, strlen($data)-1);
                $string .= $data{$pos};
            }
            return $string;
        } 
        
echo "code reff bos : ";
$code = trim(fgets(STDIN));
if ($code == "") {
        die ("Cannot be blank!\n");
    }
 echo "Please wait";
 sleep(1);
 echo ".";  
 sleep(1);
 echo ".";
 sleep(1);
 echo ".";
 sleep(1);
 echo "Check CODE";
$cekreff = test('arc123','arisdwipradipta',$code); 
if(preg_match("/false/", $cekreff)) {
    die ("\nCode salah => $code");
}       
    else {
    echo "\nOk lanjut";
}
echo "\nlimit : ";
$limit = trim(fgets(STDIN));
if ($limit == "") {
        die ("Limit Brp biji bos ISI!\n");
    }

echo "SOCKS (Optional) : ";
$filenya = trim(fgets(STDIN));
echo "Please wait";
    sleep(1);
    echo ".";
    sleep(1);
    echo ".";
    sleep(1);
    echo ".\n";
        
         
$q = 1;       
while($q <= $limit) {

$email = hurufangka(6);
$password = hurufangka(7);
$fullname = hurufangka(7);
$mac = '20'.angka(12);


$socks = $filenya;


$register = register($password,$email,$fullname,$mac,$socks);
$login = kontol($password,$email,$socks);
$invite = invite($password,$email,$code,$socks);

if(preg_match('/false/', $invite)) {
    echo "\n[$q] "."[SOCKS DIE]"." Socks : $socks";
} else {
    echo "\n[$q] "."$invite"." Socks : $socks";
}

$q++;

}
?>
