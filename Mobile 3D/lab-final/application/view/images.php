<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Drinks Image View</title>
 <script src="http://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
    <h1 style='margin:5px; padding:10px;'>Choose a drink brand to see more details</h1>
    <b style='margin:5px; padding:10px;'>Select a drinks brand name: </b>
    <form style='margin:5px; padding:10px;'>
        <select id="select">
            <?php 
                // Debug
                // $data = array("A", "B", "C", "D", "E");
                for ($i=0; $i <= count($data); $i++)                                  
                    echo '<option value="'. $data[$i] .'">'. $data[$i] . '</option>';
            ?>
        </select>
    </form> 

    <div id="content" style='margin:5px; padding:10px;'>Content</div>

    <script>
        $(document).ready(function(){
            $("#select").change(onSelect);
        });

        function onSelect() {
            var model = $(this).val();
            var str = "";

            $("select option:selected").each(function () {         

                str += "<div><b>Drinks Brand: </b> "+ $(this).text() + "</div>" + "</br>";

                var selection = $(this).text();
                var brandUrl = "../application/model/image_detail.php?brand=" + selection;

                $.getJSON(brandUrl)
                    .done((json) => onBrandDone(str, json))
                    .fail(() => {
                        console.log('viewDrinks JS Handler: Server returned an Error, trap this in your PHP Server code');
                    });
            });
        }

        function onBrandDone(str, json) {

            str += "<div width=90%; style='float:left; margin:5px; border:1px solid; border-color: blue; padding:10px;'>";

            for (var i=0; i<json.length; i++) {
                // Brand details
                str += 
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].brand + "</div>" + 
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dModelTitle + "</div>" + 
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dCreationMethod + "</div>" +
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelTitle + "</div>" +
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelSubtitle + "</div>" +
                    "<div width='15%' style='float:left; color:blue; margin:5px;border:1px solid; border-color: red; padding:10px;'>" + json[i].modelDescription + "</div>";

                str +=
                    "<div width='30%'style='float:left; margin:5px;border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" + 
                    "<img width='300px' src = '../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>" +
                    "</div>";
            }

            str+="</div>";

            document.getElementById("content").innerHTML=str;
        }
  </script>
   
</body>
</html>	