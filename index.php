<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>

        * {
            color:#FFF;
            font-family:"Raleway",sans-serif;
        }

        body {
            padding-top:100px;
        }

        #content {
            width:700px;
            height:100px;
            margin-bottom:100px;
        }

        #top {
            width:700px;
            height:100px;
        }

        #field {
            width:300px;
            height:100px;
            background:#dbdbdb;
            border-radius:15px 15px 15px 15px;
            font-size:25px;
            padding-top:30px;
        }

        #header {
            width:300px;
            height:100px;
            border-radius:15px 15px 15px 15px;
            font-size:30px;
            padding-top:30px;
        }

        div i {
            padding:0;
            margin:0;
        }

        a {
            text-decoration:none;
            color:#000000;
        }
        </style>
    </head>
    <body bgcolor='#22272b'>
    <center>
    <i class="fa fa-desktop fa-5x"></i>   
    <h2>Steckdosen-Steuerung</h2><br><br>
    <div id='top'>
        <div id='header' style='float:left;'>
            <font>An</font>
        </div>
        <div id='header' style='float:right;'>
            Aus
        </div>
    </div>
    <div id='content'>
        <div id='field' style='float:left;'>
            <a href='index.php?site=tv&action=an'>
                <i class="fa fa-power-off fa-2x"></i> LED-Leiste TV
            </a>
        </div>
        <div id='field' style='float:right;'>
            <a href='index.php?site=tv&action=aus'>
                <i class="fa fa-power-off fa-2x"></i> LED-Leiste TV
            </a>
        </div>
    </div>
    <div id='content'>
        <div id='field' style='float:left;'>
            <a href='index.php?site=zimmer&action=an'>
                <i class="fa fa-power-off fa-2x"></i> LED-Leiste Zimmer
            </a>
        </div>
        <div id='field' style='float:right;'>
            <a href='index.php?site=zimmer&action=aus'>
                <i class="fa fa-power-off fa-2x"></i> LED-Leiste Zimmer
            </a>
        </div>
    </div>
    
    <?php
    $site = $_GET['site'];
    $action = $_GET['action'];

    if($site == "tv") {
        if($action == "an") {
            $bla = shell_exec('pilight-send -p quigg_gt7000 -i 2816 -u 0 -t');
        } elseif($action == "aus") {
            $bla = shell_exec('pilight-send -p quigg_gt7000 -i 2816 -u 0 -f');
        }
    }

    if($site == "zimmer") {
        if($action == "an") {
            $bla = shell_exec('pilight-send -p quigg_gt7000 -i 2816 -u 1 -t');
        } elseif($action == "aus") {
            $bla = shell_exec('pilight-send -p quigg_gt7000 -i 2816 -u 1 -f');
        }
    }
    
    if($site == "tv" || $site == "zimmer") {
        header('Location: index.php');
    }

    ?>
    
    </body>
</html>