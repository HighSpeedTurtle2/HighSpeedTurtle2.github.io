<!DOCTYPE html>
<html>
    <head>
        <title>En Es Spongebob | WiiNet Videos</title> <!-- Video Title! -->
        <meta property="og:title" content="En Es Spongebob" /> <!-- Video Title! -->
        <meta property="og:description" content="En Es Spongebob is so epic and funny! #LOL" /> <!-- Video Desc.! -->
        <meta property="og:url" content="http://wii.turtlenet.xyz/videos/video1/" /> <!-- Video Link! -->
        <meta property="og:video" content="http://wii.turtlenet.xyz/videos/resources/video1.flv" /> <!-- Video Link! -->
        <meta property="og:image" content="http://wii.turtlenet.xyz/videos/video1/thumbnail.jpeg" /> <!-- Video Link! -->
        <link rel="stylesheet" type="text/css" href="../../css/videopage.css"/>
        <meta property="og:site_name" content="WiiNet" />
        <meta property="og:type" content="video.movie" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="theme-color" content="#BA00FF">
		<style type="text/css">
			.pages_ls_2731{
                background-image:url('../../img/6647C1.png');

            }
            .head_msg_2731 {
                background-image:url('../../img/7F57F0.png');
            }
            .head_msg_gauche_2731 {
                font-weight: bold;
            }
            .msg_2731 {
                background-image:url('../../img/BA00FF.png');
            }
            #commentaires_2731_email,#commentaires_2731_auteur,#commentaires_2731_message,#commentaires_2731_code {
                background-color:#7F57F0;
                color:white;
            }
           
		</style>
    </head>
    <body>
        <a href="../index.html"><img src="../../img/VideosLogo.png" width="150px"/></a>
        <div style="text-align:center;" id="swfcontent">
            <object type="application/x-shockwave-flash" data="../resources/player.swf" width="384" height="256" id="flvplayer" style="visibility: visible;">
                <param name="id" value="flvplayer">
                <param name="wmode" value="transparent">
                <param name="allowFullScreen" value="false">
                <param name="allowScriptAccess" value="always">
                <param name="quality" value="high">
                <param name="flashvars" value="filename=video1.flv"> <!-- Video Link! -->
            </object>
            <h1>En Es Spongebob</h1>
            <?php class pageView { private $file = 'views.txt'; public function add_view() { $prev_count = file_get_contents($this->file); file_put_contents($this->file, $prev_count+1); } public function get_view() { $count = file_get_contents($this->file); return $count; } } $view = new pageView; $view->add_view(); echo '<div style="font-size:20px;">'.$view->get_view().' views</div>'; ?>
        </div>
        <table style="border-collapse: separate;border-spacing: 0 0;">
            <tr>
                <td>
                    <a href="../authors/HighSpeedTurtle"><img src="../authors/HighSpeedTurtle/pfp.jpg" style="max-width:100px;"></a> <!-- Author! -->
                </td>
                <td>
                    <a href="../authors/HighSpeedTurtle">HighSpeedTurtle<br />1B subscribers</td></a> <!-- Author! -->
            </tr>
        </table><!-- Line below is Ratings! -->
		<div style="text-align:center;" id="votes_20208"><noscript>Javascript is disable - <a href="http://www.webestools.com/">Webestools</a> - <a href="http://www.webestools.com/vote-service-notation-module-voting-website-stars-mark-rank-script-javascript-free.html">Vote Service (notation module)</a></noscript><script type="text/javascript" src="http://services.webestools.com/votes/20208-1.js"></script></div>
        <h3>Uploaded on 23rd May 2021</h3> <!-- Upload Date! -->
        <h2>Description</h2> <!-- Line below is Desc.! -->
        En Es Spongebob is so epic and funny! #LOL
        <h2>More from this creator</h2> <!-- Make sure these are all videos by the same person! -->
        <table>
            <tr>
                <td><a href="../video2"><img src="../video2/thumbnail.jpeg"><br><div class="videotitle">Reeses Puffs Rap</div></a></td>
                <td><a href="../video3"><img src="../video3/thumbnail.jpeg"><br><div class="videotitle">Obama Beatbox</div></a></td>
                <td><a href="../video4"><img src="../video4/thumbnail.jpeg"><br><div class="videotitle">6. The Dollar</div></a></td>
            </tr>
        </table> <!-- Line below is comments module! -->
        <script type="text/javascript" src="http://services.webestools.com/comments/2731.js"></script>
    </body>
</html>