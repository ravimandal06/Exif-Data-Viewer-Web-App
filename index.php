<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="../gmpg.org/xfn/11.html">

<title>EXIF Data Viewer</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="EXIF Data Viewer" content="EXIF Data Viewer" />



<link rel="shortcut icon" href="library/img/favicon.gif" type="image/gif" />

<link rel="stylesheet" type="text/css" href="library/styles/style.css" /> 
<link rel="stylesheet" type="text/css" href="style.css">  
<link href="library/styles/custom/light.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="library/scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="library/scripts/jquery.pngFix.pack.js"></script>
<script type="text/javascript" src="library/scripts/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="library/scripts/cufon-yui.js"></script>
<script type="text/javascript" src="library/scripts/avenir.font.js"></script>
<script type="text/javascript" src="library/scripts/shapeshifter.js"></script>


<!--  Cufon Font Replacement -->
<script type="text/javascript">
Cufon.replace('h1, #navigation li', { hover:true, fontFamily: 'avenir' });
Cufon.replace('h2, h3, h4, h5, h6', { hover:true, fontFamily: 'avenir' });
</script>

<style type="text/css">
#cu3er-container {width:590px; outline:0;}

</style>

<!--  Open/Close scripts -->
<script type="text/javascript">
$(document).ready(function(){

    //Switch the "Open" and "Close" state per click
    $("#trigger").toggle(function(){
        $(this).addClass("active");
        }, function () {
        $(this).removeClass("active");
    });

    //Slide up and down on click
    $("#trigger").click(function(){
        $(this).next("#footer").slideToggle("slow");
    });

});

</script>


<!-- CSS STYLE* -->
<style >
    div{
        margin-bottom: 10px;
/*        margin-left: 110px;*/
    }
    input[type=submit] {
        padding: 5px 15px;
        margin: 5px;
        background: #D7E6F4;
        border: 0 none;
        cursor: pointer;
        -webkit-border-radius: 5px;
        border-radius: 15px;
         transition: 0.4s;
      }
      input[type=submit].btn:hover{
        background: #3984C6;
        color: #fff;
      }
      input[type=text] {
        padding: 5px 10px;
        border: 0 none;
        -webkit-border-radius: 5px;
        border-radius: 5px;
         transition: 0.4s;
      }
      input[type=file] {
        padding: 5px 10px;
        border: 0 none;
        -webkit-border-radius: 5px;
        border-radius: 5px;
         transition: 0.4s;
      }
      .content_body{
        background: #f0f8ff;
        text-align: center;
      }
      .highlight:hover{
        color: #B14E5D;
        transition: 0.6s;
        cursor: wait;
      }
      .content_body h3{
        color: #1C343F;
        cursor: crosshair;
      }
      .content-body-md-1{
        background: ;
      }

      .highlight-1{
        background-color: #67B5BC;
        cursor: wait;
      }
      .highlight-2{
        background-color: #4D81B0;
        cursor: wait;
      }
      .content_body:hover{
        color: #000;
        transition: 0.7s;
      }
      .container-php{
        margin-left: 400px;
        color: #000;
      }
      .container-php img{
        border-radius: 10px;
        height: 400px;
        width: 400px;
        align-items: center;
      }





/*footer svg css start*/




      body {
    display: grid;
    grid-template-rows: 1fr auto;
    grid-template-areas: "main""footer";
    overflow-x: hidden;
    background: #F5F7FA;
    min-height: 100vh;
    font-family: "Open Sans", sans-serif;
}

body .footer {
    z-index: 1;
    --footer-background: #ED5565;
    display: grid;
    position: relative;
    grid-area: footer;
    min-height: 12rem;
}

body .footer .bubbles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1rem;
    background: var(--footer-background);
    filter: url("#blob");
}

body .footer .bubbles .bubble {
    position: absolute;
    left: var(--position, 50%);
    background: var(--footer-background);
    border-radius: 100%;
    -webkit-animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
    animation: bubble-size var(--time, 4s) ease-in infinite var(--delay, 0s), bubble-move var(--time, 4s) ease-in infinite var(--delay, 0s);
    transform: translate(-50%, 100%);
}

body .footer .content {
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr auto;
    grid-gap: 4rem;
    padding: 2rem;
    background: var(--footer-background);
}

body .footer .content a,
body .footer .content p {
    color: #F5F7FA;
    text-decoration: none;
}

body .footer .content b {
    color: white;
}

body .footer .content p {
    margin: 0;
    font-size: 0.75rem;
}

body .footer .content>div {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

body .footer .content>div>div {
    margin: 0.25rem 0;
}

body .footer .content>div>div>* {
    margin-right: 0.5rem;
}

body .footer .content>div .image {
    align-self: center;
    width: 4rem;
    height: 4rem;
    margin: 0.25rem 0;
    background-size: cover;
    background-position: center;
}

@-webkit-keyframes bubble-size {

    0%,
    75% {
        width: var(--size, 4rem);
        height: var(--size, 4rem);
    }

    100% {
        width: 0rem;
        height: 0rem;
    }
}

@keyframes bubble-size {

    0%,
    75% {
        width: var(--size, 4rem);
        height: var(--size, 4rem);
    }

    100% {
        width: 0rem;
        height: 0rem;
    }
}

@-webkit-keyframes bubble-move {
    0% {
        bottom: -4rem;
    }

    100% {
        bottom: var(--distance, 10rem);
    }
}

@keyframes bubble-move {
    0% {
        bottom: -4rem;
    }

    100% {
        bottom: var(--distance, 10rem);
    }
}



/*footer css svg ends*/







</style>

<!-- CSS STYLE * END -->

</head>
<body>





<div id="tophat"></div> 

<div id="global_wrapper">



    <!-- Begin Sidebar -->
    <div id="sidebar" class="a">
        
        <h1 class="logo">
        <a href="index.html"><img src="library\logo.png" alt="exifdata" /></a>
        </h1>

        <br>
        <br>
        <br>
        <h2 class="highlight" style="margin-left: 30px">EXIF Data?</h2>
            <p style="margin-left: 30px">EXIF is short for <span class="highlight-1">Exchangeable Image File,</span><br>a format that is a standard for storing interchange information <br>in digital photography image files using JPEG compression.<br>Some images may even store GPS information so you can easily <br>see where the images were taken!</p>
            <p style="margin-left: 30px">EXIFdata.com is an online applicatation that <span class="highlight-2">lets you take a deeper look at your favorite images!</span></p>


    <!-- Begin Content -->
    <div id="content">
    
    
    <div class="content_block">
    <a id="Home" name="Home"></a><br /><br />
    
    <div class="content_body">


        <!-- <div class="content-body-md-1">
            <h2 style="margin-right: 10px">EXIF Data?</h2>
            <p>EXIF is short for Exchangeable Image File, a format that is a standard for storing interchange information in digital photography image files using JPEG compression.<br>Some images may even store GPS information so you can easily see where the images were taken!</p>
            <p>EXIFdata.com is an online applicatation that lets you take a deeper look at your favorite images!</p>
        </div> -->

            


    <br />
    <h3>Upload An Image</h3>
    <br>
    <form class="forms" action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" value="" size="60" name="file"/>
        <input type="submit" class="buttons btn" value="Upload" name="Submit1"/>
    </form>
    <!-- <br />
       Submit an image URL
       <form class="forms" action="https://exifdata.com/exif.php" method="post">
               <input type="text" class="buttons txt" size="74" value="" name="picurl"/>
               <input type="submit" class="buttons btn" value="Submit" name="submit"/>
       </form> -->
    <br />
    <br>
    File size limit: 20 mb
    <p>Valid file types: JPG/JPEG, TIFF, GIF, PNG, PSD, BMP, RAW, CR2, CRW, PICT, XMP, DNG</p><br>
    <br>
    <br>

    </div>
    
    </div>

</div>







<!-- <form action="index.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>


</form> -->

<!-- js script for image delation function using ajax -->
<script type="text/javascript">
        (function($) {
            $(document).ready(function(){
                var iInterval   = setInterval(deleteImagesViaAjax, 1000*10+10);    //DELETE IMAGES EVERY 10MINS

                function deleteImagesViaAjax(){
                    $.ajax({
                        url: "index.php",
                        dataType: "json",
                        cache: false,
                        type: "POST",
                        data: ({
                            action      : 'delete',
                            imageAge    : 1            //MAXIMUM AGE OF THE IMAGE TO DELETE IN HOURS - THIS MEANS ALL IMAGES UPLOADED ABOUT 1 HOURS AGO 
                        }),

                        success: function (data, textStatus, jqXHR) {
                            console.log(data);
                        },

                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log('The following error occured: ' + textStatus, errorThrown);
                        },

                        complete: function (jqXHR, textStatus) {
                        }
                    });
                }

            });
        })(jQuery);


</script>


    
<div class="container-php">
    












<?php

if(isset($_POST['Submit1']))
{
    error_reporting(0);

    $filepath = "./images/" . $_FILES["file"]["name"];

    $errors= array();
    $file_size =$_FILES['file']['size'];

    if($file_size > '20097152'){
        $errors[]='File size must be less than 20 MB';
    }
         
        if($filepath==true){
            // echo "<img src=".$filepath." />";
        }
    if(is_array($_FILES)){

        $exif = exif_read_data($_FILES['file']['tmp_name'], 0, true);
        

        foreach($_FILES as $file){
          echo "<pre>FileName: ".$file['name']  .  " :<br />\n";
          foreach ($exif as $key => $section) {


                //key.section
                if (!is_array ($section)) {
                
                    echo "$key: $section<br />";
                } else {
                    foreach ($section as $name => $val) {
                        if ($key == 'FILE') {
                            // echo "<p style='color:blue;'>$key.$name: $val</p>";

                            echo "$key.$name: $val<br />\n";
                        }
                        if ($key == 'COMPUTED') {

                            echo "$key.$name: $val<br />\n";
                        }
                        echo "";
                        if ($key == 'IFD0') {

                            echo "$key.$name: $val<br />\n";
                        }
                        echo "";
                        if ($key == 'EXIF') {

                            echo "$key.$name: $val<br />\n";
                        }
                        
                        echo "";
                        if ($key == 'GPS') {
                            if(is_array($val)){
                                foreach($val as $vals){
                                echo "$key.$name: $vals<br />\n";
                            }

                            }
                         }
                    }
                 }   
            }
        } 
    }
// $filepath = "./images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=400 width=400 />";
} 
else 
{
echo "Error !!";
}
}
?>








</div>









<!-- footer- SVG -->


<div class="main"></div>
<div class="footer">
    <div class="bubbles">
        <div class="bubble" style="--size:2.6335177957251634rem; --distance:9.56863401168497rem; --position:103.58917245557305%; --time:2.1187339051454606s; --delay:-2.4730491182180865s;"></div>
        <div class="bubble" style="--size:2.795653345686059rem; --distance:9.314612318337796rem; --position:36.34960031327715%; --time:2.702748758639209s; --delay:-2.749729490139585s;"></div>
        <div class="bubble" style="--size:4.604664148226995rem; --distance:7.827258373990904rem; --position:84.31675347405806%; --time:2.2778986922892797s; --delay:-2.724420950714464s;"></div>
        <div class="bubble" style="--size:2.310377323934376rem; --distance:8.752736567112889rem; --position:55.59344055392012%; --time:2.136822265266677s; --delay:-2.8098447278014147s;"></div>
        <div class="bubble" style="--size:5.541713037533996rem; --distance:8.885987873595358rem; --position:72.33033424680029%; --time:3.142306470760034s; --delay:-3.4811553027010276s;"></div>
        <div class="bubble" style="--size:4.262019990751427rem; --distance:6.353683583323991rem; --position:44.73278708958204%; --time:3.111493091428071s; --delay:-2.3348493195541846s;"></div>
        <div class="bubble" style="--size:5.326583118177008rem; --distance:6.291620695173996rem; --position:75.50712868497737%; --time:3.9496420179231864s; --delay:-2.9280848988352854s;"></div>
        <div class="bubble" style="--size:2.6826303693729363rem; --distance:8.494245892120377rem; --position:9.09002828142232%; --time:3.4441518855257285s; --delay:-3.726145331636723s;"></div>
        <div class="bubble" style="--size:4.987763336132874rem; --distance:6.814484283134457rem; --position:64.9942312268583%; --time:2.8340585194816623s; --delay:-3.6950996079186424s;"></div>
        <div class="bubble" style="--size:4.973309602954982rem; --distance:8.818071189386302rem; --position:0.2568009673140681%; --time:3.2428157697009565s; --delay:-3.632770839909731s;"></div>
        <div class="bubble" style="--size:5.247372866134527rem; --distance:9.030745921408357rem; --position:30.30841583692694%; --time:3.7591212866283583s; --delay:-2.343997388200433s;"></div>
        <div class="bubble" style="--size:4.1349626882121635rem; --distance:6.837645801137537rem; --position:42.728486097710494%; --time:3.1025020699848147s; --delay:-2.585919537530834s;"></div>
        <div class="bubble" style="--size:3.165397907520912rem; --distance:8.103156817964855rem; --position:75.63209550571679%; --time:2.470344306002933s; --delay:-2.5706927316465835s;"></div>
        <div class="bubble" style="--size:3.964709297795622rem; --distance:8.911285189706996rem; --position:-4.185867894131208%; --time:2.299815801756103s; --delay:-2.6121824773680893s;"></div>
        <div class="bubble" style="--size:3.2599865060185937rem; --distance:7.293921612610214rem; --position:16.221645109659462%; --time:3.000014755571767s; --delay:-2.369714407430678s;"></div>
        <div class="bubble" style="--size:4.318334212624653rem; --distance:6.0736502404009105rem; --position:6.588377872224134%; --time:2.5025309008648824s; --delay:-3.306770322781987s;"></div>
        <div class="bubble" style="--size:4.853648814755054rem; --distance:7.290201312780056rem; --position:98.26487764847045%; --time:3.782536811120813s; --delay:-2.559318143811794s;"></div>
        <div class="bubble" style="--size:4.108705113239968rem; --distance:9.952663059540669rem; --position:82.31163575197132%; --time:2.6055282301209703s; --delay:-2.868851402329185s;"></div>
        <div class="bubble" style="--size:2.667044654544794rem; --distance:9.734543641132188rem; --position:81.0080880930213%; --time:2.5670145598530807s; --delay:-3.4658732964603156s;"></div>
        <div class="bubble" style="--size:2.1513652701241rem; --distance:7.137683381805784rem; --position:30.92343904435065%; --time:3.147378811176274s; --delay:-2.2942418800014432s;"></div>
        <div class="bubble" style="--size:5.051794268454486rem; --distance:6.495315539260548rem; --position:-4.846540112356128%; --time:2.541483963516001s; --delay:-2.0508948001940874s;"></div>
        <div class="bubble" style="--size:4.377527646528744rem; --distance:9.64411280970474rem; --position:104.48214790975828%; --time:2.8812259205090665s; --delay:-3.0544308394131545s;"></div>
        <div class="bubble" style="--size:5.443586573412838rem; --distance:8.75914998726451rem; --position:85.62333007700462%; --time:3.794534094403057s; --delay:-2.39354110233907s;"></div>
        <div class="bubble" style="--size:2.033519189408347rem; --distance:9.780677679083173rem; --position:99.33013921734099%; --time:3.688895429561506s; --delay:-3.043466016140537s;"></div>
        <div class="bubble" style="--size:2.3503610115843827rem; --distance:7.183700487468215rem; --position:70.38529328765847%; --time:2.049112054496389s; --delay:-2.757871814282327s;"></div>
        <div class="bubble" style="--size:5.460030425759572rem; --distance:7.090193259916904rem; --position:10.104178261377037%; --time:3.705408033600385s; --delay:-2.101755369840836s;"></div>
        <div class="bubble" style="--size:2.830769960591196rem; --distance:7.2351052596272565rem; --position:17.92935540130696%; --time:2.758024479560353s; --delay:-2.8961527710166424s;"></div>
        <div class="bubble" style="--size:5.874287076814893rem; --distance:7.006953129900312rem; --position:72.8056038752174%; --time:2.4183210739036065s; --delay:-3.782031391287021s;"></div>
        <div class="bubble" style="--size:3.797298257388973rem; --distance:7.918749298579989rem; --position:63.73407537399416%; --time:2.127103557340286s; --delay:-3.716706115807706s;"></div>
        <div class="bubble" style="--size:5.848477955361686rem; --distance:6.934362929758101rem; --position:37.80674753398466%; --time:3.20523065523302s; --delay:-3.8107948583341362s;"></div>
        <div class="bubble" style="--size:3.4061198913350106rem; --distance:7.934944998265648rem; --position:51.806287930189576%; --time:2.516531405969664s; --delay:-3.8418367336588717s;"></div>
        <div class="bubble" style="--size:4.582079910879824rem; --distance:6.830805532010795rem; --position:63.173945706366695%; --time:3.9971395322398795s; --delay:-2.92027737643045s;"></div>
        <div class="bubble" style="--size:5.778568498307986rem; --distance:9.748269282254576rem; --position:45.28335643542234%; --time:3.3589368379603712s; --delay:-3.296000597152557s;"></div>
        <div class="bubble" style="--size:5.318947725895527rem; --distance:7.138181793250503rem; --position:29.440326441889155%; --time:2.8473938596670423s; --delay:-2.423665056395227s;"></div>
        <div class="bubble" style="--size:5.882187191805388rem; --distance:6.936507682553941rem; --position:68.73022612449226%; --time:3.380130391642009s; --delay:-3.9246290140990134s;"></div>
        <div class="bubble" style="--size:4.597951830763748rem; --distance:8.259176612894187rem; --position:60.13261071415435%; --time:2.7472253671425877s; --delay:-2.3657042747318853s;"></div>
        <div class="bubble" style="--size:3.932391663591483rem; --distance:6.49438967328086rem; --position:0.9314448176624124%; --time:3.5970315616660113s; --delay:-3.5163991486165505s;"></div>
        <div class="bubble" style="--size:3.118635792091599rem; --distance:8.394349151666646rem; --position:42.1103759920237%; --time:2.823249725620374s; --delay:-2.866596559234025s;"></div>
        <div class="bubble" style="--size:2.379339277362477rem; --distance:7.337910717439342rem; --position:31.28312957249713%; --time:3.2771705711887162s; --delay:-2.791722910820027s;"></div>
        <div class="bubble" style="--size:3.9528430604149234rem; --distance:8.776834324205304rem; --position:99.25023167420399%; --time:2.4042030429302255s; --delay:-2.43241118498497s;"></div>
        <div class="bubble" style="--size:5.432949958955839rem; --distance:6.42688892733804rem; --position:52.91679861031918%; --time:2.8816864315911674s; --delay:-2.5307258870324056s;"></div>
        <div class="bubble" style="--size:3.180176959823023rem; --distance:8.168875937641552rem; --position:67.72864040084839%; --time:3.9095527752090726s; --delay:-3.077157934015282s;"></div>
        <div class="bubble" style="--size:3.0512133814289824rem; --distance:7.494467536004939rem; --position:55.56558035666588%; --time:2.966981567969481s; --delay:-2.22945163624175s;"></div>
        <div class="bubble" style="--size:4.3857006993477rem; --distance:6.522363969356369rem; --position:44.10509079127547%; --time:3.416904187254525s; --delay:-2.3829481509706634s;"></div>
        <div class="bubble" style="--size:5.443447754197129rem; --distance:7.073644000715846rem; --position:19.716074385480717%; --time:3.893132820150265s; --delay:-2.1449319956374526s;"></div>
        <div class="bubble" style="--size:4.591066012242501rem; --distance:6.346474471428336rem; --position:39.31489127413254%; --time:3.6999556204200292s; --delay:-2.031375105254069s;"></div>
        <div class="bubble" style="--size:4.772153580493187rem; --distance:9.423362937689202rem; --position:34.92797416090931%; --time:2.4041454087108347s; --delay:-2.7402537330917873s;"></div>
        <div class="bubble" style="--size:5.383825164135794rem; --distance:6.541773626552565rem; --position:49.52478702524299%; --time:3.546375927266146s; --delay:-2.632683735285801s;"></div>
        <div class="bubble" style="--size:5.558991176677718rem; --distance:8.225669498178913rem; --position:27.22563348766083%; --time:3.0095179730330543s; --delay:-2.4737775245895492s;"></div>
        <div class="bubble" style="--size:5.254797663289408rem; --distance:8.932650728812344rem; --position:75.85068139368406%; --time:2.2171442772476104s; --delay:-3.542033048824047s;"></div>
        <div class="bubble" style="--size:3.922538112154337rem; --distance:8.721975833869195rem; --position:34.393255861215565%; --time:2.598991804940547s; --delay:-2.1989145413391764s;"></div>
        <div class="bubble" style="--size:3.641777628676322rem; --distance:9.331701109871716rem; --position:44.265909046720665%; --time:3.8626208994215228s; --delay:-2.0574118155815935s;"></div>
        <div class="bubble" style="--size:3.1503155840157566rem; --distance:7.708220071311111rem; --position:90.33676946435561%; --time:3.334773803439332s; --delay:-3.943336143832105s;"></div>
        <div class="bubble" style="--size:2.0463105748643358rem; --distance:6.050904737869286rem; --position:35.057296725398224%; --time:3.915508191407258s; --delay:-3.088670525059308s;"></div>
        <div class="bubble" style="--size:5.875636351269435rem; --distance:6.771564130108014rem; --position:20.411501420356824%; --time:3.73265811011248s; --delay:-3.9629514493481848s;"></div>
        <div class="bubble" style="--size:5.690678497210782rem; --distance:9.614756077861323rem; --position:42.86405598919139%; --time:2.6314401262784854s; --delay:-2.1140680771144504s;"></div>
        <div class="bubble" style="--size:2.6915356852768486rem; --distance:7.149878224913584rem; --position:46.962527342016095%; --time:2.883169234215171s; --delay:-3.379364901611199s;"></div>
        <div class="bubble" style="--size:3.057323698302926rem; --distance:6.231313224718918rem; --position:86.72584478418999%; --time:2.047728983390081s; --delay:-2.8263155768206656s;"></div>
        <div class="bubble" style="--size:4.845933366543151rem; --distance:7.963542286871937rem; --position:44.10122154182686%; --time:3.4244939626474697s; --delay:-2.1598028693270734s;"></div>
        <div class="bubble" style="--size:4.576046956674866rem; --distance:6.555028712699395rem; --position:80.14945007820717%; --time:3.110253672767862s; --delay:-3.4243581280163307s;"></div>
        <div class="bubble" style="--size:3.670743142494743rem; --distance:6.396593711850803rem; --position:47.91978971631092%; --time:3.405296997784149s; --delay:-2.1601872111533043s;"></div>
        <div class="bubble" style="--size:4.504410280219179rem; --distance:9.380538665832464rem; --position:63.86895930215081%; --time:3.8685282685026205s; --delay:-3.689186475568309s;"></div>
        <div class="bubble" style="--size:5.601552876435565rem; --distance:8.656654634150378rem; --position:83.9871235433925%; --time:2.9485111501659653s; --delay:-2.3204170758365184s;"></div>
        <div class="bubble" style="--size:5.641713011036878rem; --distance:8.397534060087672rem; --position:17.113593676848954%; --time:3.1232452744189834s; --delay:-2.4615703892359835s;"></div>
        <div class="bubble" style="--size:5.854613427797506rem; --distance:6.733862346640269rem; --position:12.546310826906637%; --time:2.5120042037852626s; --delay:-3.479194361755027s;"></div>
        <div class="bubble" style="--size:4.048741578601425rem; --distance:9.144999487435534rem; --position:-0.8516920547407487%; --time:2.7946592917135478s; --delay:-2.4952545943258353s;"></div>
        <div class="bubble" style="--size:5.237108033143603rem; --distance:7.910362500780097rem; --position:67.19403179196996%; --time:2.046634636560889s; --delay:-2.62827682268452s;"></div>
        <div class="bubble" style="--size:3.4663167154306107rem; --distance:6.316241311944141rem; --position:65.1883007127254%; --time:3.174237282163037s; --delay:-3.4706131305159453s;"></div>
        <div class="bubble" style="--size:2.8163757888828647rem; --distance:7.6079616228389275rem; --position:28.12274737916988%; --time:2.174480018818719s; --delay:-2.2622810553983053s;"></div>
        <div class="bubble" style="--size:3.4164268623687724rem; --distance:7.090100882464749rem; --position:12.981929006377687%; --time:2.6414168458604252s; --delay:-3.1934950081811184s;"></div>
        <div class="bubble" style="--size:5.288839386090295rem; --distance:6.189784658355224rem; --position:96.55025976961848%; --time:3.8317153547157683s; --delay:-2.2008412178448022s;"></div>
        <div class="bubble" style="--size:5.464055147865155rem; --distance:6.528978775929022rem; --position:83.05302630061459%; --time:2.731980011359587s; --delay:-3.9428156408958928s;"></div>
        <div class="bubble" style="--size:2.6671078497173566rem; --distance:7.5752085276150645rem; --position:12.43830492957565%; --time:2.5000989551418167s; --delay:-2.0600882611711073s;"></div>
        <div class="bubble" style="--size:4.3152237643624725rem; --distance:7.629277777689331rem; --position:4.9507237778409525%; --time:3.0239233936944148s; --delay:-3.2466473688471074s;"></div>
        <div class="bubble" style="--size:4.595604767118031rem; --distance:6.190911869953137rem; --position:43.288137172961775%; --time:3.3730518404290746s; --delay:-2.6723071426945206s;"></div>
        <div class="bubble" style="--size:5.129468533263495rem; --distance:8.421675214048559rem; --position:62.505991368269335%; --time:2.787131878688605s; --delay:-2.504456931056166s;"></div>
        <div class="bubble" style="--size:5.2033409649824405rem; --distance:6.238209491006937rem; --position:78.40075970447924%; --time:2.060780237318684s; --delay:-3.2849710897080757s;"></div>
        <div class="bubble" style="--size:5.148542125241319rem; --distance:8.60295190556409rem; --position:70.3508034500316%; --time:2.7474301665849685s; --delay:-2.928442841512695s;"></div>
        <div class="bubble" style="--size:4.693315277135697rem; --distance:6.497323880643162rem; --position:28.479498541815353%; --time:2.19861943584027s; --delay:-2.5341305889611907s;"></div>
        <div class="bubble" style="--size:4.26021328118269rem; --distance:7.6698230470591rem; --position:76.98689097475338%; --time:2.570152905691471s; --delay:-2.437187613690884s;"></div>
        <div class="bubble" style="--size:2.780303625384694rem; --distance:8.86044392190699rem; --position:87.60204016817553%; --time:2.739411888841058s; --delay:-3.740459762399822s;"></div>
        <div class="bubble" style="--size:5.930077306724687rem; --distance:9.23201509489647rem; --position:72.60330268875137%; --time:2.9872093239070496s; --delay:-3.253868440838753s;"></div>
        <div class="bubble" style="--size:2.852944330697431rem; --distance:7.680994982811214rem; --position:44.58154439056699%; --time:3.990792488813526s; --delay:-2.2622560673639236s;"></div>
        <div class="bubble" style="--size:3.302672170315592rem; --distance:6.998386526791639rem; --position:27.869128475375163%; --time:2.0525330203894883s; --delay:-3.583056807889261s;"></div>
        <div class="bubble" style="--size:4.136248239554827rem; --distance:8.382449556869604rem; --position:-2.2515356858056323%; --time:3.5374673258793923s; --delay:-3.973239002973962s;"></div>
        <div class="bubble" style="--size:3.3689920599949232rem; --distance:9.292889344858388rem; --position:17.288920715624315%; --time:2.761503100487859s; --delay:-3.256836983768769s;"></div>
        <div class="bubble" style="--size:2.252961205316974rem; --distance:8.365207268968186rem; --position:50.70557271468762%; --time:2.0198166560822015s; --delay:-3.9772974236014034s;"></div>
        <div class="bubble" style="--size:3.869242444988066rem; --distance:7.764736164889352rem; --position:98.52186518306283%; --time:2.679251871002286s; --delay:-2.435460464682144s;"></div>
        <div class="bubble" style="--size:4.409170619004607rem; --distance:8.760153348011897rem; --position:75.50588401053477%; --time:3.0574869035266063s; --delay:-3.571612348004293s;"></div>
        <div class="bubble" style="--size:5.593822792989006rem; --distance:9.012583702610605rem; --position:31.498436819144004%; --time:2.9910085004745337s; --delay:-2.5276568919728235s;"></div>
        <div class="bubble" style="--size:2.814380663081967rem; --distance:8.099652264180659rem; --position:64.35569145709299%; --time:3.9051134184219016s; --delay:-3.9178406370700944s;"></div>
        <div class="bubble" style="--size:3.384861167524809rem; --distance:7.948035630329021rem; --position:33.804506570289995%; --time:3.9571430351357364s; --delay:-2.2135915119216976s;"></div>
        <div class="bubble" style="--size:2.070927093498537rem; --distance:6.761873809841831rem; --position:65.25161921664194%; --time:3.959688761662453s; --delay:-2.2871831631489656s;"></div>
        <div class="bubble" style="--size:3.2418258514881595rem; --distance:7.48396120454312rem; --position:69.10319109256503%; --time:2.690113465162414s; --delay:-2.396757549520766s;"></div>
        <div class="bubble" style="--size:4.329518794167154rem; --distance:9.300388077099209rem; --position:62.55923082094586%; --time:3.5602613777937706s; --delay:-3.5298179624263195s;"></div>
        <div class="bubble" style="--size:4.953111992395785rem; --distance:8.824709795233002rem; --position:23.880332974115728%; --time:2.7336100731954462s; --delay:-3.8317313088579583s;"></div>
        <div class="bubble" style="--size:2.6912758865892803rem; --distance:7.519881082801894rem; --position:30.617775152021352%; --time:2.3420157659816496s; --delay:-2.6634886691401616s;"></div>
        <div class="bubble" style="--size:5.581669140724922rem; --distance:9.468286715790423rem; --position:99.48690266819553%; --time:3.060947814134938s; --delay:-2.724167384527288s;"></div>
        <div class="bubble" style="--size:3.866215072665794rem; --distance:7.686881184958919rem; --position:88.67585841485752%; --time:3.845227330738298s; --delay:-2.7659150777248134s;"></div>
        <div class="bubble" style="--size:4.995638462723164rem; --distance:9.867933828830235rem; --position:44.55072945627166%; --time:3.0755398398846165s; --delay:-3.444598259472566s;"></div>
        <div class="bubble" style="--size:3.7174684343102244rem; --distance:9.939220981903444rem; --position:46.33547294967845%; --time:3.680613365470386s; --delay:-3.3208072273648295s;"></div>
        <div class="bubble" style="--size:5.095529899142745rem; --distance:9.540863777632119rem; --position:104.78653122213542%; --time:3.376938265875186s; --delay:-2.953383018928455s;"></div>
        <div class="bubble" style="--size:2.0622748318991633rem; --distance:6.638554247402386rem; --position:0.888325760427735%; --time:2.1159456183573586s; --delay:-2.6015132214998458s;"></div>
        <div class="bubble" style="--size:5.743763293495151rem; --distance:9.13394614301389rem; --position:43.37530584916452%; --time:2.798578707676794s; --delay:-3.646166984076925s;"></div>
        <div class="bubble" style="--size:2.8433339623388534rem; --distance:9.863431483614107rem; --position:100.05845231216936%; --time:2.101737274061292s; --delay:-2.283076969215265s;"></div>
        <div class="bubble" style="--size:2.779301212855927rem; --distance:9.703753934835067rem; --position:78.08653387648353%; --time:2.6383200864195424s; --delay:-2.094595816870276s;"></div>
        <div class="bubble" style="--size:2.5992715283471135rem; --distance:9.572067646055686rem; --position:55.71560313458528%; --time:2.584165128953281s; --delay:-3.8218305546086144s;"></div>
        <div class="bubble" style="--size:4.618738659522302rem; --distance:6.943972801345802rem; --position:69.53857582061117%; --time:2.323121719349549s; --delay:-2.9014463343424226s;"></div>
        <div class="bubble" style="--size:4.012974669997793rem; --distance:7.798538447686855rem; --position:99.46069244819711%; --time:3.7789956067823876s; --delay:-2.071594738895848s;"></div>
        <div class="bubble" style="--size:5.090908615479858rem; --distance:7.659710241042416rem; --position:13.714898453629537%; --time:2.160148462087139s; --delay:-3.896630001453044s;"></div>
        <div class="bubble" style="--size:3.797702591331684rem; --distance:6.504102054126606rem; --position:19.111994042091688%; --time:3.127482302541731s; --delay:-2.904628004437291s;"></div>
        <div class="bubble" style="--size:3.681826845225782rem; --distance:8.6278875773321rem; --position:45.97055558602074%; --time:2.6391631959732633s; --delay:-2.32978035274346s;"></div>
        <div class="bubble" style="--size:2.8272167725300505rem; --distance:7.506352183752741rem; --position:4.14355615419208%; --time:2.681800159081869s; --delay:-2.987050589483824s;"></div>
        <div class="bubble" style="--size:3.738645684610507rem; --distance:8.803857628956255rem; --position:21.04521352487896%; --time:2.274120015067611s; --delay:-3.6314243817235305s;"></div>
        <div class="bubble" style="--size:2.275810186536342rem; --distance:9.006329538442767rem; --position:82.78465422373549%; --time:2.1495797923357163s; --delay:-3.513110904736543s;"></div>
        <div class="bubble" style="--size:4.632123222546781rem; --distance:9.888242991655009rem; --position:73.10933930481517%; --time:3.004655552592536s; --delay:-2.80101307094106s;"></div>
        <div class="bubble" style="--size:5.8879552461086195rem; --distance:9.859972673194516rem; --position:7.089171241779015%; --time:3.2771423536555053s; --delay:-2.890634251161695s;"></div>
        <div class="bubble" style="--size:2.817599723427019rem; --distance:9.067685846290841rem; --position:43.08802947061517%; --time:3.609526252118246s; --delay:-2.4905351690414084s;"></div>
        <div class="bubble" style="--size:4.318047234029715rem; --distance:6.473809578932842rem; --position:76.44263432639723%; --time:2.6217593963281316s; --delay:-3.5503185283720704s;"></div>
        <div class="bubble" style="--size:5.361877617981855rem; --distance:6.845343186081777rem; --position:45.63751506674891%; --time:2.648710028072809s; --delay:-3.1714834451095024s;"></div>
        <div class="bubble" style="--size:3.071412806236398rem; --distance:8.600580914052845rem; --position:20.336047748514783%; --time:2.1972819621220774s; --delay:-2.673915972892154s;"></div>
        <div class="bubble" style="--size:2.6745974499414364rem; --distance:9.214057298125056rem; --position:31.794820668545796%; --time:2.4981936587362457s; --delay:-3.9223522212522277s;"></div>
        <div class="bubble" style="--size:5.9715920535789095rem; --distance:9.085423852016074rem; --position:29.952043959111585%; --time:3.8663347910773456s; --delay:-2.6002011181589086s;"></div>
        <div class="bubble" style="--size:2.5143711620205833rem; --distance:6.750931434736295rem; --position:-0.07152177522617986%; --time:2.9909294300080904s; --delay:-3.135294412262336s;"></div>
        <div class="bubble" style="--size:2.541768933033075rem; --distance:7.368464110258887rem; --position:-0.2936552269693893%; --time:2.0245181007934443s; --delay:-2.605173651735821s;"></div>
        <div class="bubble" style="--size:3.327333023117638rem; --distance:9.977292491229822rem; --position:84.69653758481076%; --time:2.6192656470827105s; --delay:-3.451795375148003s;"></div>
        <div class="bubble" style="--size:3.4774153979812104rem; --distance:7.273937089032523rem; --position:101.21716817090059%; --time:2.3446446756403945s; --delay:-2.219832128888938s;"></div>
        <div class="bubble" style="--size:3.228338000620467rem; --distance:8.465135007125799rem; --position:3.082220933716931%; --time:2.835356688037s; --delay:-3.618010453155892s;"></div>
    </div>
    <div class="content">
    </div>
</div>
<svg style="position:fixed; top:100vh">
    <defs>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
            <feComposite in="SourceGraphic" in2="blob" operator="atop"></feComposite>
        </filter>
    </defs>
</svg>

</body>
</html>