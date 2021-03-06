define(function(require, exports, module) {
    require("jquery.jcrop-css");
    require("jquery.jcrop");
    var Notify = require('common/bootstrap-notify');
    var ImageCrop = require('myBanana.imagecrop');

    exports.run = function() {

        var $modal = $("#modal");
        var imageCrop = new ImageCrop({
            element: "#article-pic-crop",
            group: 'article',
            cropedWidth: 754,
            cropedHeight: 424
        });

        imageCrop.on("afterCrop", function(response){
            var url = $("#upload-picture-crop-btn").data("gotoUrl");
            $.post(url, {images: response}, function(data){
                $modal.modal('hide');
                $("#article-thumb-container").show();
                $("#article-thumb-remove").show();
                $("#article-thumb").val(data.large.file.uri);
                $("#article-originalThumb").val(data.origin.file.uri);
                $('#article-thumb-preview').attr('src',data.large.file.url);
                $("#article-thumb-container").html("<img class='img-responsive' src='"+data.large.file.url+"'>")
            });

        });


        $("#upload-picture-crop-btn").click(function(e) {
            e.stopPropagation();

            var postData = {
                imgs: {
                    large: [754, 424]
                },
                deleteOriginFile: 0
            };

            imageCrop.crop(postData);

        });

    };
  
});