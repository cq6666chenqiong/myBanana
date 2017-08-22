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
use Topxia\System;

class CourseSorceController extends BaseController
{

    public function indexAction(Request $request,$userId){
        $con = mysqli_connect(System::$DBADDR,System::$DBUSER,System::$DBPASSWORD);
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        $sql = "select u.nickname nickname,s.score xuefen,c.title,s.createTime from user u 
        JOIN user_score s on s.userId = u.id 
        join course c on s.courseId = c.id
        where u.id = ".$userId.";";
        error_log($sql);
        mysqli_select_db($con,System::$DBNAME);
        mysqli_multi_query($con,"set names 'utf8'");
        $result = mysqli_query($con,$sql);
        $sorce = array();
        if(!empty($result)){
            $sorce = mysqli_fetch_array($result);
        }
        //$paginator = new Paginator($this->get('request'), 60, 20);
        $con->close();
        return $this->render('TopxiaWebBundle:MyCourse:score.html.twig', array(
            'sorce'                       =>  $sorce
        ));
    }

}