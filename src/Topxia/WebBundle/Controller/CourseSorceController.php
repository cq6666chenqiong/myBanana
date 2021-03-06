<?php
/**
 * Created by PhpStorm.
 * User: chenqiong
 * Date: 2017/6/8
 * Time: 10:24
 */

namespace Topxia\WebBundle\Controller;

use Topxia\Common\Paginator;
use Topxia\Common\ArrayToolkit;
use Topxia\Service\Util\myBananaLiveClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\System;



class CourseSorceController extends BaseController
{

    public function indexAction(Request $request,$userId){
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        $sql = "select u.nickname nickname,s.score xuefen,c.title title,s.createTime createTime,s.courseName courseName from user u 
        JOIN user_score s on s.userId = u.id 
        left join course c on s.courseId = c.id
        where u.id = ".$userId.";";
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $score = array();
        if(!empty($result)){
            while(($row = mysqli_fetch_array($result)) != null){
                array_push($score,$row);
            }
        }
        //$paginator = new Paginator($this->get('request'), 60, 20);
        $con->close();
        error_log(json_encode($score));
        return $this->render('TopxiaWebBundle:MyCourse:score.html.twig', array(
            'score'  =>  $score,
            'num' => sizeof($score)
        ));
    }

    public function memberScoreAction(Request $request)
    {
        $userNum = $request->query->get('memberNum');
        $con = System::getConnection();
        $sql = "select u.nickname memberNum, p.truename truename ,s.score score ,c.title title,s.courseName courseName,s.year year, 
        s.remark remark from user_score s join user u on s.userId = u.id join user_profile p on p.id = u.id 
        left join course c on c.id = s.courseId
        where u.nickname =  '" . $userNum . "';";
        $result = System::getManyResult($con, $sql);
        error_log(json_encode(
            $result
        ));
        System::closeConnection($con);

        return new Response(json_encode($result));
    }
}