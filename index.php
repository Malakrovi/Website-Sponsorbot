<?php
    session_start();

?>



<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>D-TOOLS - ADVERTBOT</title>

    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>

<div id="languageNav" class="overlay">

    <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content">
        <a href="" onclick="localStorage.setItem('locale', 'en'); location.reload()">English</a>
        <a href="" onclick="localStorage.setItem('locale', 'fr'); location.reload()">Français</a>
    </div>

</div>

<div class="container-fluid">
    <div class="row content">
        <div class="col-lg-12 col-xl-6">
            <p class="header" id='channelName'>Chat</p>
            <div class="scrollable" id="chat"></div>
            <select class="demi" id="guilds"></select>
            <select class="demi " id="channels"></select><br>
            <div id="formatting">
                <a href="javascript:void(0)" id="embed" class="formatting" title="Effacer la mise en forme"><span>🔧</span></a>
                <a href="javascript:void(0)" id="bold" class="formatting" onclick="format('bold')"><span><b>B</b></span></a>
                <a href="javascript:void(0)" id="emphasis" class="formatting"
                   onclick="format('italic')"><span><em>I</em></span></a>
                <a href="javascript:void(0)" id="underline" class="formatting"
                   onclick="format('underline')"><span><u>U</u></span></a>
                <a href="javascript:void(0)" id="strike" class="formatting" onclick="format('strikeThrough')"><span><s>abc</s></span></a>
                <a href="javascript:void(0)" id="clear" class="formatting"
                   onclick="format('removeFormat')"><span>🧽</span></a>
            </div>
            <div contenteditable="true" id="toSend"></div>
            <button class="blue" id="send"></button>
            <button class="red" id="leaveGuild"></button>
            <!-- TODO Fix code apparently not working in this version of discord.js
            <button id="delLast" class="blue">🗓 Delete Last Message</button>-->
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
            <p id="lastMessagesHead" class='header'></p>
            <div class="scrollable" id="lastMessages"></div>
            <button id="clearChat"></button>
            <button id="refreshChat"></button>
            <button class="red" id='refreshToken'></button>
            <button class="red" id="language" onclick="openNav()"></button>
            <button class="red" id='inviteBtn'></button>
            <button class="red" id='dashboard'></button>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-3">
            <p class="header" id='guildName'></p>
            <div class="scrollable" id="guildInfo"></div>
            <br>
            <fieldset>
                <legend id="autoScrollHead"></legend>
                <label class="switch">
                    <input checked id="chk1" type="checkbox" value="last">
                    <span class="slider round"></span>
                </label>
                <label for="last" id="last"></label><br>
                <label class="switch">
                    <input checked id="chk2" type="checkbox" value="chatCheck">
                    <span class="slider round"></span>
                </label>
                <label for="chatCheck" id='channelNameLabel'></label><br>
                <label class="switch">
                    <input id="chk3" type="checkbox" value="animCheck">
                    <span class="slider round"></span>
                </label>
                <label for="animCheck" id="animCheck"></label>
            </fieldset>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/discord.12.1.1.min.js"></script>
<script type="text/javascript" src="locales.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/panel.js"></script>
</html>