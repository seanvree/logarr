<?php
function readExternalLog($filename)
{
    $log = file($filename);
    $log = array_reverse($log);
    foreach ($log as $line) {
        echo $line.'<br/>';
    }
}
include 'config/config.php';
/**
* Converts bytes into human readable file size.
*
* @param string $bytes
* @return string human readable file size (2,87 Мб)
* @author Mogilev Arseny
*/
function FileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach ($arBytes as $arItem) {
        if ($bytes >= $arItem["VALUE"]) {
            $result = $bytes / $arItem["VALUE"];
            $result = str_replace(".", ",", strval(round($result, 2)))." ".$arItem["UNIT"];
            break;
        }
    }
    return $result;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $config['title']; ?></title>
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/favicon/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="Logarr"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="images/favicon/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="images/favicon/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="images/favicon/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="images/favicon/mstile-310x310.png" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400" />
        <link rel="stylesheet" href="logarr.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Demo of Real-Time Search in JavaScript" />
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width,initial-scale=1" />

                   
        <script src="pace.js"></script>

        <script type= "text/javascript" src="jquery.min.js"> </script>
        <script type= "text/javascript">
            $(document).ready(function() {

                function update() {
                $.ajax({
                type: 'POST',
                url: 'config/timestamp.php',
                timeout: 1000,
                success: function(data) {
                    $("#timer").html(data); 
                    window.setTimeout(update, 1000);
                }
                });
                }
                update();

            });

        </script>

        <script src="jquery_search.js"></script>


        <script type="text/javascript" src="hilitor.js"></script>
        <script type="text/javascript">

            var myHilitor; // global variable
            document.addEventListener("DOMContentLoaded", function(e) {
            myHilitor = new Hilitor("content");
            myHilitor.apply("error");
            }, false);

        </script>

        <script type='text/javascript'>//<![CDATA[
            window.onload=function(){
            document.getElementById( 'slide' ).addEventListener( 'click', function() {
                var body = document.getElementById( 'slide-body' );
                if( body.className == 'expanded' ) {
                    body.className = '';
                    document.getElementById( 'more' ).textContent = 'more...';
                } else {
                    body.className = 'expanded';
                    document.getElementById( 'more' ).textContent = 'less...';
                };
            } );
            }//]]> 
        </script>

    </head>
    
    <body id="body" body style="border: 10px solid #252525; color: #FFFFFF; background-color: #252525;">
    
        <div class="Row">
        
            <div id="timer" class="Column"></div>

            <div id="logo" class="Column">
                <img src="images/log-icon.png" height="125px" />
            </div>
                        
            <div id="search"  class="Column">
                <input name="text-search" id="text-search"  type="text"                  size="20" maxlength="30" placeholder="search & highlight">
                <input name="searchit"    id="searchButton" type="button" value="Search" onClick="highlight()">
            </div>
    
        </div>


        <?php foreach ($logs as $k => $v) { ?>
            <div class="row2">
            
                <div id="filepath" class="left">
                    <strong><?php echo $v; ?></strong>
                </div>

                <div id="header" class="w3-container w3-center">
                    <h3><span class="header"><strong><?php echo $k; ?>:</strong></span></h3>
                </div>
                            
                <div id="filesize"  class="right">
                     Log File Size: <strong> <?php echo filesize($v) . ' bytes'; ?></strong>
                </div>
        
            </div>
                        
            <div id="slide">
                <div class="<?php echo $k; ?>" id="slide-body">
                    <p><?php readExternalLog($v); ?></p>
                </div>

                <div id="more" class="more"><strong>more...</strong></div>

            </div>

        <?php } ?>

    </body>
    
</html>
