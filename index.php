<?php session_start();
if(isset($_SESSION['image'])){
    $image=$_SESSION['image'];
        }else{
            $image="";
        };
if(isset($_SESSION['filename'])){
    $filename=$_SESSION['filename'];
        };
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
        };
if(isset($_SESSION['song'])){
    $song=$_SESSION['song'];
        }
if(isset($_SESSION['lyric'])){
    $lyric=$_SESSION['lyric'];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-wideth, initial-scale=1.0">
        <Title>Corner</Title>
        <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/interface.css"/>
        <link rel="stylesheet" href="./css/balleffect.css"/>
        <link rel="stylesheet" href="./css/barrage.css"/>
        <script type="text/javascript" src="./javascript/jquery-3.1.1.min.js"></script>
        <style>
            button{display: inline-block}
        </style>
    </head>
    <body>
        <div class="wrapper">
            <nav>
                <input type="radio" name="tab" id="User" onclick="UserButton()" checked>
          
                <input type="radio" name="tab" id="Favourite" onclick="FavouriteButton()">

                <input type="radio" name="tab" id="Barrage" onclick="BarrageButton()">
                
                <input type="radio" name="tab" id="Search" onclick="SearchButton()">

                <input type="radio" name="tab" id="Shop" onclick="ShopButton()">
               

                <label for="User" class="User">
                    <a href="#">
                      <i  class="fa fa-user-circle" aria-hidden="true"></i>   
                    </a>
                </label>

                <label for="Search" class="Search" >
                    <a href="#">
                        <i class="fa fa-search" aria-hidden="true" ></i>
                    </a>
                </label>
                
                <label for="Barrage" class="Barrage">
                    <a href="#">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>  
                    </a>
                </label>

                <label for="Favourite" class="Favourite">
                    <a href="#">
                        <i  class="fa fa-star" aria-hidden="true"></i> 
                    </a>
                </label>


                <label for="Shop" class="Shop">
                    <a href="#">
                        <i  class="fa fa-shopping-bag" aria-hidden="true"></i> 
                    </a>
                </label>
              
                <div class="tab" id="tab"></div>
            </nav>
            
            <div class="barrage">
             <canvas width="600px"></canvas>
            


            <form action="./php/fetchData.php" method="POST">
            <span id="searchbox">
            <span class="searchbox">
                <input type="text"  name="search" id="search" placeholder="Search keyword" onkeyup="showHint(search.value)"/>          
                <input type="submit" name="Search" id="submit" >
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
            </span>
        </form>

        <div id="back_result"> <span id="txtHint" ></span></div> 
        <script type="text/javascript" src="./javascript/search.js"></script>
        
            <div class="Userinformation" id="Userinformation">
                <p>
                    
                <?php if($_SESSION['uname']==""){
                    echo "You have not <a href='./php/UserLogin.php'>Login</a>";
                }else{
                    if(isset($_SESSION['uname'])){
                        echo"welcome " .$_SESSION['uname']."<a href='./php/UserLogin.php'>logout</a>";
                    }
                }
                    ?>
                </p>
                
         </div>

        <div class="barragebox" id="barragebox">
            <input type="text" id="send" placeholder="Send barrage"/>
            <button id="button">
                <i class="fa fa-paper-plane" aria-hidden="true"> Send</i>
            </button>
        </div>


        <div class="effect">
            <div class="bigball"></div> 
                <div class="smallball"></div>         
        </div>



        <div class="favouritebox" id="favouritebox">
            <ul>
                <h3>Songlist</h3>
                <li>
                    <p href="#">xxx</p>
                </li>
            </ul>
        </div>

        <div class="shopbox" id="shopbox">
            <ul>
                <h3>VIP purchase</h3>
                <li>
                    <p href="#">xxx</p>
                </li>
            </ul>
        </div>
    </div>
    </div>

    <form action="./php/fetchsonglist.php" method="POST" id="autofetch">  
    </form>
    
    <script>
    $(document).ready(function a(){
        var songArray = [<?php echo $_SESSION['songlist']?>];
        $.each(songArray, function(index, value){
            $("#simplelist").append(value + '<br>');
        });
    });
    const items = [<?php echo $_SESSION['songlist']?>]
    function iterator(items){//using iterator pattern to implement the playlist
	this.items= items
	this.index=0
}
    iterator.prototype={
	hasNext: function()
	{
		return this.index< this.items.length
	},
	next: function()
	{
		return this.items[this.index++]
	}
}
    const iter=new iterator(items)
    while(iter.hasNext())
	console.log(iter.next())
</script>

        <div class="container" id="container" onselectstart="return false">
                <div id="songinfo" >
                <p>
                <span class="origin">Now Playing:<?php echo $song?></span>
                </p>
                </div>
                <div id="slist" style="color:white;font-size: 10px;margin-top: 50px;margin-left: 37%;">
                <span id="simplelist"></span>
                </div>
                <div class="controls" style="bottom: 25%; position: absolute;">
                    <form action="../php/prev.php" method="POST">
                    <button type="submit" id="prev" style="position:fixed; left:43%"> 
                    <i class="fa fa-arrow-left" aria-hidden="true" id="prev" style="font-size: 2em;">prev</i> 
                    </button>
                    </form>
                    <form action="../php/next.php" method="POST" id="form_submit">
                    <button type="submit" id="next" style="position:fixed; right: 47%;">
                    <i class="fa fa-arrow-right" aria-hidden="true" id="next" style="font-size: 2em;">next</i>
                    </button>
                    </form>
                </div>
            <!-- page_list left -->
            <div class="page_list">
                <div class="playlist_smallwindow clearfix">
                 <div class="poster" id="btnExpandPlayBox">
            <img src="<?php echo $image?>" alt="" id="smallwindow_albumPic" />
          
            
            <div class="poster_hoverback"><i class="fa fa-expand" aria-hidden="true"></i></div>
            </div>
            </div>
            </div>
            <!-- page_lyric detail page -->
            <div class="page_songdetail" id="pageSongDetail">
            <!-- blur background -->
            <div class="g_blurbg" id="bgBlur" style="background-image:url('./image/user_face.png');"></div>
            <div class="maincontainer clearfix" >
             <div class="compressbtn" id="btnCompressPlayBox" title="musicdetail" >
            <i class="fa fa-compress" aria-hidden="true"></i>
                </div>
             <div class="discsection" >
            
            <div class="disc_arc" id="bgDisc" style="background-image:url('./image/user_face.png');">
                <div class="poster"><img src="<?php echo $image?>" alt="" id="posterimg"></div>
            </div>
            <!-- ./image/music icon.png -->
            <div class="disc_btns">
                <span class="btn playall"><i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;Like</span>
                <span class="btn playall"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;Favourite</span>
                <span class="btn playall"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Download</span>
                <span class="btn playall"><i class="fa fa-share-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Share</span>
            </div>
                 </div>

            <div class="lyricsection" >
            <div class="lrcinfo" id="songDetail" >
                <p class="info_album" >
                <span class="origin" >Now Playing:<span class="originname" ><?php echo $song?></span>
                </p>
            </div>

            <div class="lrccontainer" id="lrcContainer">
                <div class="lrcbox" id="lrcBox">
                <div style="width: 500px;height: 500px;">
                <p style="font-size:20px;">
                   <?php
                    if(isset($lyric)){
                            $handle = fopen($lyric, 'r');                 //OPEN FILE
                            if (!$handle) {                                   
                            echo 'OPEN Fail!';
                            }
                       while (false !== ($char = fgetc($handle))) {        //recursive read the file contents
                           echo $char;
                       }
                       fclose($handle);                                    //close file
                    }
                    else{
                        echo "";
                    }
                   ?>
                </p>
                </div>
                </div>
            </div>
            <div id="songplayer" style="margin-top:60px;">
            <audio id="audio" controls autoplay>
                <source src="<?php echo $filename; ?>" type="audio/mpeg">
                </source>
                </audio>
            </div>
            </div>
    </div>
</div>
    </body>
    <script type="text/javascript" src="./javascript/autoswitch.JS"></script>
    <script type="text/javascript" src="./javascript/interface.JS"></script>
<script type="text/javascript" src="./javascript/player.JS"></script>
<script type="text/javascript" src="./javascript/barrage.JS"></script>
</html>

