<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>

    <div id="content"></div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
	$.getJSON('../application/model/json.php', function(data) {
        var html = "<ul>";

        for (var i in data.users) 
            html += "<li>" + data.users[i].firstName 
                + " " + data.users[i].lastName + " | " 
                + data.users[i].joined.month + " | "
                + data.users[i].joined.year+"</li>";

        html += "</ul>";
        $('#content').html(html);       
  	});
    </script>
</body>
</html>