<?php
require_once 'phpExcelReader/Excel/reader.php';
require_once 'System.php';

	$a = $_FILES["file"]["tmp_name"];
    error_log($a);
	//$b = "/var/file/".$_FILES["file"]["name"];
$b = "D://FK//".$_FILES["file"]["name"];
	error_log($b);
	if(move_uploaded_file($a,$b)){
		
	}else{
		
	}

    error_log("success upload");


    // ExcelFile($filename, $encoding);
    $data = new Spreadsheet_Excel_Reader();

    $data->setOutputEncoding('UTF-8');

    $data->read($b);

    error_reporting(E_ALL ^ E_NOTICE);

    error_log(DBADDR);
    $con = mysqli_connect(DBADDR,DBUSER,DBPASSWORD);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    error_log("2");

    $sql = "";

    for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
        $name = $data->sheets[0]['cells'][$i][1];
        $sql = $sql."INSERT INTO `classroom` ( `title`, `status`, `about`, `categoryId`, `description`, `price`, `vipLevelId`, `smallPicture`, `middlePicture`, `largePicture`, `headTeacherId`, `teacherIds`, `assistantIds`, `hitNum`, `auditorNum`, `studentNum`, `courseNum`, `lessonNum`, `threadNum`, `noteNum`, `postNum`, `income`, `createdTime`, `service`, `private`, `recommended`, `recommendedSeq`, `recommendedTime`, `rating`, `ratingNum`, `maxRate`, `showable`, `buyable`, `conversationId`, `orgId`, `orgCode`) VALUES ("."'"."$name"."'".", 'published', NULL, '0', NULL, '0.00', '0', '', '', '', '0', '', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0.00', '1496642998', NULL, '0', '0', '100', '0', '0', '0', '100', '1', '1', '0', '1', '5');";

    }
    error_log($sql);
    mysqli_select_db($con,DBNAME);
    mysqli_multi_query($con,"set names 'utf8'");
    $result = mysqli_multi_query($con,$sql);
    $con->close();
    error_log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
        echo json_encode(array(
            'a'=>1,
            'b'=>2
        ));
    error_log("bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");

/*
 * select u.nickname,
(select count(1) from testpaper_result t where t.userId = u.id
and t.passedStatus not in ('none','unpassed') ) xuefen,
(select count(1) from testpaper_result f where f.userId = u.id
and f.passedStatus in ('none','unpassed')
) guake
from user u LEFT JOIN user_profile p on u.id = p.id
 */
?>
