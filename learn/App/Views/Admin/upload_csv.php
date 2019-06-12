 <?php
require $_SERVER['DOCUMENT_ROOT'].'/lean/learn/App/Views/Utils/const.php';
require LOADER;
$current_date=$function->getCurrentDate().' '.$function->getCurrentTime();
$current_time=$function->getCurrentTime();
$errors=false;
if($_FILES['files']['name'])
{
  $filename = explode(".", $_FILES['files']['name']);
  if($filename[1] == 'csv')
  {
    $handle = fopen($_FILES['files']['tmp_name'], "r");
     while($data = fgetcsv($handle))
     {
        $token=md5($function->generateHash());
        $names=$function->sanitize($data[0]);
        $email=$function->sanitize($data[1]);
        $phone=$function->sanitize($data[2]);
        $password="123456";
        $address='';
        $degree=0;
        $profession=0;
        $insert_state=$admin->registerStudent($names,$email,$password,$phone,$address,$degree,$profession,$token);
        if(!$insert_state){
          $errors=true;
        }

     }
   fclose($handle);
   if($errors){
    echo "There was something wrong while upload a csv file please contact system admins";
   }else{
    echo "Everything Uploaded accordingly and successfully";
   }
  }
}else{
echo "no file(filename)";
}
 ?>