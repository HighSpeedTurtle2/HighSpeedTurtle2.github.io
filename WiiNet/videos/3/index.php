<!DOCTYPE html>
<html>
    <head>
        <title>WiiNet Videos</title>
        <link rel="stylesheet" type="text/css" href="../../css/videopage.css"/>
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
           <?php 
               $servername = "localhost"; $username="phpuser"; $password="VRTjr5mpdBqjdvTn";
               $conn = new mysqli($servername, $username, $password); 
               $sql = 'SELECT video_title, video_description, video_author, video_date, video_id FROM videos WHERE video_id=3'; // change id to video page
               mysqli_select_db($conn, 'wiinet-videos');
               $retval = mysqli_query( $conn, $sql );
                
           ?>
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
                <?php while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) { echo "<param name='flashvars' value='filename=video{$row['video_id']}.flv'>"; ?>
            </object>
            <h1><?php echo "{$row['video_title']}"; ?></h1>
            <?php class pageView { private $file = 'views.txt'; public function add_view() { $prev_count = file_get_contents($this->file); file_put_contents($this->file, $prev_count+1); } public function get_view() { $count = file_get_contents($this->file); return $count; } } $view = new pageView; $view->add_view(); echo '<div style="font-size:20px;">'.$view->get_view().' views</div>'; ?>
        </div>
        <table style="border-collapse: separate;border-spacing: 0 0;">
            <tr>
                <td> 
                    <a href="../authors/<?php echo "{$row['video_author']}";  ?>"><img src="../authors/<?php echo "{$row['video_author']}";  ?>/pfp.jpg" style="max-width:100px;"></a> <!-- Author! -->
                </td>
                <td>
                    <a href="../authors/<?php echo "{$row['video_Author']}";  ?>"><?php echo "{$row['video_author']}";  ?></a></td>
            </tr>
            </table>
        <h3>Uploaded on <?php echo "{$row['video_date']}";  ?></h3>
        <h2>Description</h2>
        <?php echo "{$row['video_description']}"; }  ?>
    </body>
</html>