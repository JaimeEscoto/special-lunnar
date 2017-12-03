<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <meta charset="utf-8">
    <title>HOLA</title>
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('wait.gif') 50% 50% no-repeat rgb(249, 249, 249);
            opacity: .8;
        }
        #wait {
            position: fixed;
            top: 50%;
            left: 50%;
            background-color: #dbf4f7;
            background-image: url("wait.gif"); // path to your wait image
            background-repeat: no-repeat;
            z-index: 100; // so this shows over the rest of your content
            /* alpha settings for browsers */

            opacity: 0.9;
            filter: alpha(opacity=90);
            -moz-opacity: 0.9;
        }
        #loading {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: fixed;
            display: block;
            opacity: 0.7;
            background-color: #fff;
            z-index: 99;
            text-align: center;
        }
        #loading-image {
            position: absolute;
            top: 100px;
            left: 240px;
            z-index: 100;
        }
    </style>

    <script src="thegallery.js" type="text/javascript">
</script>

</head>

<body>

    </div>
    hola HOLA
    <h1>Hola</h1>

    <input type="button" id="sample" value="getQtyPhotoLikes" onclick="getQtyPhotoLikes('Bb4w77sBJpb','qtyPhotoLikes')" />

    <input type="button" id="sample" value="setLikeToPhoto" onclick="setLikeToPhoto('Bb4w77sBJpb')" />
    <button type="button" name="button">HELLO</button>

    <br>
    <div id="qtyPhotoLikes"><b>qty??</b>
    </div>


    <div class='loader' id="loader" style="display: none;">

    </div>


</body>

</html>
