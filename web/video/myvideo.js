        var myPlayer;
        function start(){

            var type = $('#lessonType').val();
            var url = $('#lessonUrl').val();
            //alert(type);
            //alert(url);
            if(type=="video"){
                var uris = "";
                $('#lesson-swf-content').html(
                    "<video id='my-video' class='video-js' controls preload='auto' autoplay style='width:100%; height:100%;'  poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>"+
                    "<source src='"+url+"' type='video/mp4'>"+
                    "<source src='"+uris+"' type='video/webm'>"+
                    "<source src='"+uris+"' type='video/ogg'>"+
                    "<p class='vjs-no-js'>"+
                    "To view this video please enable JavaScript, and consider upgrading to a web browser that"+
                    "<a href='http://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>"+
                    "</p>"+
                    "</video>"
                );
                myPlayer = videojs('my-video');
                videojs("my-video").ready(function(){
                    var myPlayer = this;
                    myPlayer.play();
                });
                $("#start").hide();
            }else{
                //alert("ppt:"+url);
                $('#lesson-swf-content').hide();
                $('#lesson-ppt-content').show();
                if(IsPC()){
                    //alert("pc");
                    $('#lesson-ppt-content').html(
                        "<iframe src='"+url+"' scroll='auto' style='width:100%; height:100%;overflow-x:scroll;overflow-y:scroll'></iframe>"
                    );
                }else{
                    //alert("移动");
                    $('#lesson-ppt-content').html(
                        "<div id='wrapper'>"+
                        "<iframe src='"+url+"' scroll='auto' style='width:100%; height:100%;overflow-x:scroll;overflow-y:scroll;'></iframe>" +
                        "</div>"
                    );
                }

                /*
                $('#lesson-swf-content').html(
                    "<iframe src='"+url+"' class='video-js' style='width:100%; height:100%;'></iframe>"
                );
                */
            }
        }


        function pause(){
            myPlayer.pause();
        }

        function play(){
            myPlayer.play();
        }

        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }