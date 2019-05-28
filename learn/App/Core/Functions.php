<?php 

class Validate{

    //function to get extension of a file
    public function validate_image($str){
        $state=false;
        if(!empty($str) && strlen($str)>3){
            $fileExt=explode('.', $str);
            //get actual extension
            $extension=strtolower(end($fileExt));
            $allowed=array('jpg','png','jpeg','gif');
            if(in_array($extension,$allowed)){
                $state=true;
            }else{
                $state=false;
            }
        }else{
            $state=false;
        }

        return $state;
    }
	//function to validate login
	public function sanitize($str){
		global $con;
		$invalid_characters = array("$", "%", "#", "<", ">", "|");
		$str = str_replace($invalid_characters, "", $str);
		$str=stripcslashes(strip_tags(htmlentities(htmlspecialchars($str))));
		return $str;
	}

    public function formatTransactionID($random,$id,$currency_id,$sender_names,$receiver_names){
        return ($id.$random.strtoupper(substr($sender_names,0,1)).$currency_id.strtoupper(substr($receiver_names,0,1)));
    }
	//validate phone number
	public function validate_phone($value){
        $state=false;
		if(!preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', trim($value))) {
		     $state=false;
		} else {
		     $state=true;
		}
        return $state;
	}

	//email valid 
	public function isValidEmail($email) {
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
            return false;
        }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                return false;
            }
        }
    }

    return true;
	}

    //function to remove all white space from a string
    public function removeSpace($str){
        $str = preg_replace('/\s+/', '', $str);
        return $str;
    }

    //format date
    public function formatDate($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'days',
            'h' => 'hours',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
    public function string_date_format($number_date){
        $date = new DateTime($number_date);
        $result = (int)$date->format('m');
        $day=$date->format('d');
        $year=$date->format('Y');
        $monthName = strftime('%B', mktime(0, 0, 0, $result));
        return $monthName.' '.$day.', '.$year;
    }

    public function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    public function getCurrentDate(){
        return date("Y/m/d");
    }

    public function getCurrentTime(){
        date_default_timezone_set("Africa/Kigali");
        return date("h:i:sa");
    }

    public function validateRequest($url_request){
        $rec_request=array("members","dashboard");
        $firstIndex = strripos($url_request, "/");
        $query=substr($url_request,$firstIndex+1,strlen($url_request));

        $mark_post=strripos($query,"?");
        if(!empty($mark_post) && $mark_post!=0){
            $query=substr($query,0, $mark_post);
        }
        $return_status=false;
        if(in_array($query, $rec_request)){
            $return_status=true;
        }else{
            $return_status=false;
        }
        return $return_status;

    }
    public function validateQueryString($user_type,$request){
         $agent_request=array();
         $admin_request=array();
         $member_request=array("create_member");
         $return_valley=false;
         if($user_type==1){
            if(in_array($request, $admin_request)){
                $return_valley=true;
            }else{
                $return_valley=false;
            }
         }elseif($user_type==2){
            if(in_array($request, $agent_request)){
                $return_valley=true;
            }else{
                $return_valley=false;
            }
         }elseif($user_type==3){
            if(in_array($request, $member_request)){
                $return_valley=true;
            }else{
                $return_valley=false;
            }
         }
         return $return_valley;
    }

    public function loadView($user_type,$request){
        $view_path='App/Views/';
        if($user_type==1)
            $view_path.="Admin/";
        elseif($user_type==2)
            $view_path.="Agent/";
        elseif($user_type==3)
            $view_path.="Member/";
        $view_path.=$request.".php";

        return $view_path;
    }
    public function extract_array($array,$field_name){
        $field_value='';
        if(is_array($array)){
            foreach ($array as $key => $value) {
                $field_value=$value[$field_name];
            }
        }else{
            $field_value="Invalid Field";
        }
        return $field_value;
    }
    public function generateHash(){
        $bytes = openssl_random_pseudo_bytes(32);
        $hash = base64_encode($bytes);
        return $hash;
    }
}
$function=new Validate();
?>