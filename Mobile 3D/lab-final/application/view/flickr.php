<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View — Flickr Web Service</title>
    <style>
        h1 {
            color:red; 
            margin: 5px;
        }
        h2 {
            color:blue; 
            margin: 5px;
        }
        p {
            color:green; 
            margin: 5px; 
        }
        .imgBox {
            padding: 2px; 
            margin: 2px; 
            border: 1px solid grey; 
            border-radius: 0.25rem; 
            float: left; 
            width: 20%;
        }
        img {
            padding: 2px; 
            margin: 2px; border: 1px solid lightgrey; 
            border-radius: 0.25rem; 
            float: left; 
            width: 90%;}
        .box {
            border: 2px solid green; 
            padding: 5px; 
            float: left; 
            margin-top: 20px; 
            margin-left: 5px; 
            margin-right: 5x; 
            margin-bottom: 5px; 
            padding: 20px; 
            width: 95%; 
            height: auto;
        }
        .textInput{
            margin: 5px; 
            float: left;
        }
        .btn{
            margin: 5px; 
            float: left;
        }
    </style>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../application/js/flickr.js"></script>

</head>

<body>
    <h1> Flickr Web Service</h1>
    <h2> Search on Flickr Feed</h2>
    <div class="textInput">
        <input type="text" value="Sprite" id="txt" />
    </div>
  
    <div class="btn">
        <button onclick="loadImages()">Search</button>
    </div>

    <div class="box">
        <h1 id="title"></H2>
        <h2 id="link"></h3>
        <p id="description"></p>
        <p id="modified"></p>
        <p id="generator"></p>   
        <div id="images"></div>
    </div>

  
</body>