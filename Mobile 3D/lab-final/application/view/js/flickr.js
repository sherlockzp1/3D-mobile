$(document).ready(loadImages);

function loadImages(){
    var tag = $("#txt").val();
    var url = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";

    $.getJSON(url, {tags: tag, tagmode:"all", format: "json"}, function(data){

        $('#title').html(data.title);
        $('#link').html(data.link);
        $('#description').html(data.description);
        $('#modified').html(data.modified);
        $('#generator').html(data.generator);

        var imageHTML = "";
        $.each(data.items, function(i, item){          
            imageHTML += '<div class="imgBox">' + '<div><h3> Title: ' + item.title + '</h3></div>';
            imageHTML += '<img src="' + item.media.m + '"/>';
            imageHTML += '<div><h4> Published: ' + item.published + '</h4></div></div>';
            if (i == 4) return false;
        }); 

        $('#images').html(imageHTML);
    });
}