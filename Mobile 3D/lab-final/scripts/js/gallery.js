
$(document).ready(function() {

    var xhr = new XMLHttpRequest();
    var html = "", url = "scripts/php/gallery.php";

    xhr.open("GET", url, true);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            var res = xhr.responseText.split("~");
            var fancyAttrs = 'data-fancybox data-caption="My X3D model render"'

            for (var i = 0; i < res.length; i++) {
                if (!res[i]) continue;

                html += '<a href="assets/images/gallery_images' + res[i] +'" ' + fancyAttrs + ' >';
                html += '<img class="card-img-top img-thumbnail" src="assets/images/gallery_images' + res[i] + '"/>';
                html += '</a>';
            }

            document.getElementById('gallery').innerHTML = html;
        }
    }
});