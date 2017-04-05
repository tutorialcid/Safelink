<?php
// Willy Arisky
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- BEGIN ADREACTOR CODE -->
    <script data-cfasync="false">
    var _avp = _avp || [];
    (function() {
    var s = document.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = window.location.protocol + '//adserver.adreactor.com/js/libcode3.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
    })();
    </script>
    <!-- END ADREACTOR CODE -->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Link Decrypter</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/"><?php echo $title; ?></a></li>
              <li><a rel="dofollow" href="http://www.marwanto606.xyz">Marwanto606</a></li>
              <li><a rel="dofollow" href="http://www.learnmore-seemore.com">Streaming Video</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
                <h3><b>What is <?php echo $title; ?>?</b></h3>
Link Decrypter is a service that is used to protect a link.
With Link Decrypter, you also protect your blog / website belongs to you because it uses a null referer, so it can not be tracked.
Link Decrypter is free, so we put some ads to make this website alive.
        <center>    <!-- BEGIN ADREACTOR CODE -->
    <div id="avp_zid_9">
    <script>
    _avp.push({ tagid: 'avp_zid_9', alias: '/', type: 'banner', zid: 9, pid: 3545 });
    </script>
    </div>
    <!-- END ADREACTOR CODE -->
        </center>

   
         <center> <a class="btn btn-md btn-primary" href="<?php echo $domain; ?>/redirect/?site=<?php echo base64_encode($go); ?>" role="button">Visit Link &raquo;</a></center>
         
    <center><!-- BEGIN ADREACTOR CODE -->
    <div id="avp_zid_6">
    <script>
    _avp.push({ tagid: 'avp_zid_6', alias: '/', type: 'banner', zid: 6, pid: 3545 });
    </script>
    </div>
    <!-- END ADREACTOR CODE -->
    </center>
        <?php
echo '<h2 class="bmenu1"><align="center"> Top Chat iTunes </h2><div class="list2">';

function tmgrab($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '1');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3
";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}

$grab = strstr(tmgrab('https://www.apple.com/id/itunes/charts/songs/'),'class="section chart-grid');
$tfkid = explode('</strong>',$grab);
for($i=1; $i<=11; $i++){
$file = cut($tfkid[$i],'l=en">','</a>');
$artis = cut($tfkid[$i],'&amp;l=en">','</a></h4>');
$imgz = cut($tfkid[$i],'src="','"');
$img = explode('">',$file); 
$img = str_replace('width="100" height="100"','width="60" height="60"',$file);
$bajingan = explode('">',$file);
$judul = cut($bajingan[0].'">','alt="','">');
$link=$artis.'-'.$judul;
$link=str_replace(' ', '-', $link);
$link=strtolower($link);
if(!empty($img[0])){
echo '<table width="100%" class="otable"><tbody><tr><td width="60px"><img src="https://www.apple.com/'.$imgz.'" title="'.$artis.' - '.$judul.'" alt="'.$artis.' - '.$judul.'" width="60" height="60"></td><td><a title="'.$artis.' - '.$judul.'" alt="'.$artis.' - '.$judul.'" rel="dofollow" href="http://www.mpti.ga/video/'.$link.'"><b>'.$artis.' - '.$judul.'</b></a></td></tr></tbody></table>';
}}

function cut($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}return '';}}
?>
      </div>

    </div> <!-- /container -->
<center><?php echo $title; ?> - Copyright &copy; 2015</center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
