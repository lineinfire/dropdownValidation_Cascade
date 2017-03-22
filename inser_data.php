<?php
include("connection.php");
if(isset($_POST['csc'])){
parse_str($_POST['csc'],$arr);
if(isset($arr['city']) && $arr['city'] !=''){
$obj = New casCade();
$obj->insert_user_data($arr,$con);
//$value=$obj->get_country($arr['city'],$con);
echo "Your Data Successfully Saved.";
}else{
echo "Please select all details.";
}
}

class casCade{

function insert_user_data($arr,$con){
$city =$arr['city'];
$state =$arr['state'];
$country =$arr['country'];
$sql = "INSERT   FROM tbl_user_data"; 
$query = "INSERT INTO tbl_user_data VALUES (NULL, '$city', '$state', '$country')";
$con->query($query);
$con->close();
}
 
function get_country($arr,$con){

$sql = "SELECT tbl_state.state_name , tbl_country.country_name,tbl_city.city_name FROM tbl_city INNER JOIN tbl_state ON tbl_state.id = tbl_city.state_id INNER JOIN tbl_country ON tbl_country.id = tbl_state.country_id where tbl_city.id='$arr'"; 
$data='';
     if ($result = $con->query($sql)) { 

         while($obj = $result->fetch_object()){ 
              $data .= $obj->state_name; 
            $data .=$obj->city_name; 
         } 
   } 
print_r($data);
}
}