<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_b12dc3e6c0772a2486a06520abe6b91f39e45a7c5bc07f9ece6cd7ca6e769adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
.webuploader-container {
  position: relative;
}
.webuploader-element-invisible {
  position: absolute !important;
  clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px,1px,1px,1px);
}
.webuploader-pick {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #fff;
  padding: 5px 10px;
  color: #333;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #ccc;
  overflow: hidden;
}
.webuploader-pick-hover {
  background: #e6e6e6;
  border-color: #adadad;
}

.webuploader-pick-disable {
  opacity: 0.6;
  pointer-events:none;
}

.balloon-uploader {
  border: 1px solid #ddd;
  border-radius: 4px;
}

.balloon-uploader-heading {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-bottom: 1px solid #ddd;
  display: none;
}

.balloon-uploader-footer {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px 15px;
  border-top: 1px solid #ddd;
  text-align: right;
}

.balloon-filelist {
  width: 100%;
}

.balloon-filelist-heading {
  padding: 8px 10px;
  font-weight: bold;
  border-bottom: 2px solid #ddd;
}

.balloon-uploader-body {
  position: relative;

}

.balloon-filelist .file-name,
.balloon-filelist .file-size,
.balloon-filelist .file-status,
.balloon-filelist .file-manage {
  position: relative;
  z-index: 1;
}

.balloon-filelist .file-name {
  display: inline-block;
  width: 40%;
}

.balloon-filelist .file-size {
  display: inline-block;
  width: 20%;
}

.balloon-filelist .file-status {
  display: inline-block;
  width: 18%;
}
.balloon-filelist .file-manage {
  display: inline-block;
  width: 20%;
  z-index: 9999;
  position: absolute;
}

.balloon-filelist ul {
  list-style: none;
  margin: 0;
  padding: 0;
  min-height: 100px;
  max-height: 300px;
  overflow-y: scroll;
}


.balloon-filelist ul li {
  position: relative;
  border-bottom: 1px solid #ddd;
  padding: 8px 10px;
}

.balloon-dnd {
  visibility: hidden;
}

.balloon-uploader-none .balloon-uploader-footer,
.balloon-uploader-none .balloon-uploader-body {
  visibility: hidden;
}

.balloon-uploader-none .balloon-dnd {
  visibility: visible;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-align: center;
  vertical-align: middle;
}

.balloon-nofile {
  position: absolute;
  top: 40px;
  left: 0;
  right: 0;
  bottom: 0;
  line-height: 100px;
  text-align: center;
  color: #999;
}

.balloon-uploader .file-pick-btn {
  display: inline-block;
}

.balloon-uploader .start-upload-btn {
  position: relative;
  display: inline-block;
  cursor: pointer;
  background: #5bc0de;
  padding: 5px 10px;
  color: #fff;
  text-align: center;
  border-radius: 3px;
  border: 1px solid #46b8da;
  overflow: hidden;
}

.balloon-uploader .start-upload-btn:hover {
  background: #31b0d5;
  border-color: #269abc;
}

.balloon-filelist .file-progress {
  position: absolute;
  top: 0;
  left: 0;
  right: -40px;
  bottom: 0;
}

.balloon-filelist .file-progress-bar {
  background: rgb(219,242,215);
  background: rgba(59, 181, 33, 0.18);
  float: left;
  height: 100%;
}

</style>

<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-targetType=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        ";
        // line 211
        echo "        <li><a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入资源链接</a></li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\" style=\"display: none\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 218
        $this->loadTemplate("TopxiaWebBundle:CloudFile:video-quality-switcher.html.twig", "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", 218)->display($context);
        // line 219
        echo "
            ";
        // line 220
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 221
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "video")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\" >

              <ul>

                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
        echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>

              </ul>
            </div>

          </div>

        </div>
        <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
            <div id=\"file-browser-video\" data-role=\"file-browser\"
            data-base-url=\"";
        // line 244
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video"));
        echo "\"
            data-default-url=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 246
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
            data-empty=\"暂无视频文件，请先上传。\">
            \t<div class=\"file-browser-list-container\"></div>
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
            <div id=\"file-browser-video\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_browser", array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "video")), "html", null, true);
        echo "\"
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"请填入资源链接\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
          <div class=\"alert alert-info\" >
            <ul>
              <li>上传的链接需用七牛云的对象存储中的mp4文件或pdf文件的链接</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-targetType=\"";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
      data-targetId=\"";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 305
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 306
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 310
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "audio")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>
                ";
        // line 318
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 319
            echo "                  500M
                ";
        } else {
            // line 321
            echo "                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                ";
        }
        // line 323
        echo "                </strong>。</li>
                ";
        // line 324
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 325
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 328
            echo "
                ";
        }
        // line 330
        echo "              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
          <div id=\"file-browser-audio\" data-role=\"file-browser\"
          \t\tdata-base-url=\"";
        // line 337
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio"));
        echo "\"
            data-default-url=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
            data-empty=\"暂无音频文件，请先上传。\">
          \t\t<div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
          data-url=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_browser", array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "audio")), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 386
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 387
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 391
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "ppt")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            >
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
          <div id=\"file-browser-ppt\" data-role=\"file-browser\"
          \t\tdata-base-url=\"";
        // line 407
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt"));
        echo "\"
            data-default-url=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 409
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
          \t\tdata-empty=\"暂无PPT文件，请先上传。\">
          \t<div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
            <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_browser", array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "ppt")), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>



 <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "document")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 429
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 430
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\" data-toggle=\"tab\">上传文档</a></li>
        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">

            ";
        // line 456
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 457
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 461
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "cloud_document")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"></div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>pdf,doc,docx</strong>格式的文档上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>文档将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
          <div id=\"file-browser-document\" data-role=\"file-browser\"
              data-base-url=\"";
        // line 475
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document"));
        echo "\"
            data-default-url=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 477
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
              data-empty=\"暂无文档，请先上传。\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
            <div id=\"file-browser-document\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_browser", array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "document")), "html", null, true);
        echo "\" data-empty=\"暂无文档，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>



   <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 497
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 498
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\" data-toggle=\"tab\">上传Flash</a></li>
        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>

         <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            ";
        // line 523
        $context["token"] = $this->env->getExtension('topxia_uploader_twig')->makeUpoaderToken((isset($context["targetType"]) ? $context["targetType"] : null), (isset($context["targetId"]) ? $context["targetId"] : null), "private");
        // line 524
        echo "            <div class=\"balloon-uploader\"
              data-init-url=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_init", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-finish-url=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_finished", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-upload-auth-url = \"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploader_auth", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\"
              data-accept=\"";
        // line 528
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_uploader_twig')->getUploadFileAccept((isset($context["targetType"]) ? $context["targetType"] : null), "flash")), "html", null, true);
        echo "\"
              data-process=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_uploader_twig')->getProcessMode((isset($context["targetType"]) ? $context["targetType"] : null)), "html", null, true);
        echo "\"
            ></div>


            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>swf</strong>格式的文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>Flash将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
        <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
          <div id=\"file-browser-flash\" data-role=\"file-browser\"
              data-base-url=\"";
        // line 544
        echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash"));
        echo "\"
            data-default-url=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
        echo "\"
            data-my-sharing-contacts-url=\"";
        // line 546
        echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
        echo "\"
              data-empty=\"暂无Flash，请先上传。\">
            <div class=\"file-browser-list-container\"></div>
          </div>
        </div>

        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
            <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_browser", array("courseId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "flash")), "html", null, true);
        echo "\" data-empty=\"暂无Flash，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 554,  762 => 546,  758 => 545,  754 => 544,  736 => 529,  732 => 528,  728 => 527,  724 => 526,  720 => 525,  717 => 524,  715 => 523,  687 => 498,  683 => 497,  679 => 496,  665 => 485,  654 => 477,  650 => 476,  646 => 475,  630 => 462,  626 => 461,  622 => 460,  618 => 459,  614 => 458,  611 => 457,  609 => 456,  580 => 430,  576 => 429,  572 => 428,  558 => 417,  547 => 409,  543 => 408,  539 => 407,  521 => 392,  517 => 391,  513 => 390,  509 => 389,  505 => 388,  502 => 387,  500 => 386,  472 => 361,  468 => 360,  464 => 359,  449 => 347,  438 => 339,  434 => 338,  430 => 337,  421 => 330,  417 => 328,  412 => 325,  410 => 324,  407 => 323,  401 => 321,  397 => 319,  395 => 318,  385 => 311,  381 => 310,  377 => 309,  373 => 308,  369 => 307,  366 => 306,  364 => 305,  336 => 280,  332 => 279,  313 => 263,  301 => 254,  290 => 246,  286 => 245,  282 => 244,  269 => 234,  258 => 226,  254 => 225,  250 => 224,  246 => 223,  242 => 222,  239 => 221,  237 => 220,  234 => 219,  232 => 218,  223 => 211,  210 => 187,  206 => 186,  19 => 1,);
    }
}
