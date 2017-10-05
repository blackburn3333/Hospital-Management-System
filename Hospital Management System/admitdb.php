
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $admm_pid   = $_POST['adm_pid'];
	  $admm_name  = $_POST['adm_name'];
	  $admm_age   = $_POST['adm_age'];
	  $admm_tel   = $_POST['adm_con'];
	  $admm_bgr   = $_POST['adm_bg'];
	  $admm_disa  = $_POST['pet_disea'];
	  $admm_rom	  = $_POST['adm_rn'];
    $admm_date  = date("Y-m-d");

    $checkeml="SELECT `pet_id` from admit_pet where `pet_id`='$admm_pid'";
    $petdup=mysqli_query($con,$checkeml);
    $rowpet=mysqli_fetch_array($petdup);

if($rowpet['pet_id']==$admm_pid){
    $hos = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Patient Already Dmited in Hospitol!</div>';
}else{

    if($admm_rom == "1"){
        $rquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '1'";
        if(mysqli_query($con,$rquery)){}
    }

    if($admm_rom == "2"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '2'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "3"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '3'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "4"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '4'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "5"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '5'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "6"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '6'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "7"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '7'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "8"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '8'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "9"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '9'";
        if(mysqli_query($con,$rrquery)){}
    }

    if($admm_rom == "10"){
        $rrquery = "UPDATE `hospi_room` SET `room_avilabl`='NAV',`room_petID`='$admm_pid' WHERE `room_id` = '10'";
        if(mysqli_query($con,$rrquery)){}
    }

    $query = "INSERT INTO `admit_pet`
    (`admit_name`, `admit_age`, `admit_con`, `admit_bg`, `admit_rn`, `pet_id`, `admit_date`, `pet_des`)
    VALUES
    ('$admm_name','$admm_age','$admm_tel','$admm_bgr','$admm_rom',$admm_pid,'$admm_date','$admm_disa')";

    if(mysqli_query($con,$query)){
		$success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
    header("Location: admite.php");
	  		}
		}

}

?>
