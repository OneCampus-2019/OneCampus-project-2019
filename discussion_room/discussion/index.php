<DOCTYPE html>
<html>
<head>
<title>discussion</title>
<link rel="stylesheet" type="text/css" href="styles/index/smartboard.css"/>
<link rel="stylesheet" type="text/css" href="styles/index/index.css"/>
<link rel="stylesheet" type="text/css" href="styles/chat/text_chat.css"> 
<link rel="stylesheet" type="text/css" href="styles/audiovisual/video_room.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="../discussion_room_1/styles/index.css"/>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="scripts/smartboard/tools.js"></script>
<script  src="lib/p5/p5.js"></script>
<script  src="lib/p5/addons/p5.sound.min.js"></script>
<script src="lib/socketio/socket.io.js"></script>
<script src="scripts/audiovisual/audiovisual.js"></script>
</head>
<body>
<div id="topbarx">
<div id="top_imagesx">
<img src="../../media_store/onecampus_store/onecampus_logo/onecampuslogo.png"/>
</div>
<div id="disc_infox">
<span>discussion</span>
</div>
<center>
<div id="timingx"></div>
</center>
</div>
<div id="all_tools">
<div id="part_area">
<div id="stream_user">
<?php include_once("audiovisual.php");?>
</div>
<div id="otherpart">
<div id="videos" class="videos">


<!-- Remote videos get appended here -->

</div>

</div>
</div>
<div id="board_chat">
<div id="myboard">
<?php include_once('../discussion_room_1/index.php');?>
</div>
<div id="chat">
<?php include_once('chat.php');?>
</div>
</div>
</div>
<center>
<div id="onefooterx">onecampus team 2020</div>
<center>


<script src="scripts/index/index.js"></script>
</body>


</html>
