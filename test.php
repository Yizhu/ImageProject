<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<title></title>
		<script src="cufon-yui.js" type="text/javascript"></script>
		<script src="Aller_700.font.js" type="text/javascript"></script>
		<script src="Eraser_500.font.js" type="text/javascript"></script>
		<script type="text/javascript">
		Cufon.replace('h1',{ fontFamily: 'Aller'});
		Cufon.replace('h2',{ fontFamily: 'Eraser',
							
							});
		</script>
		<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jquery.slidertron-1.3.js"></script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
			 	<!-- Add jQuery library -->
		<script type="text/javascript" src="../lib/jquery-1.10.1.min.js"></script>
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />
		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="../source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
		<link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<style type="text/css">

.contain {
 position: absolute;
 margin: 40px;
}
.imgShow {
 position: absolute;
 -webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-box-shadow: #666 2px 4px 3px;
		-moz-box-shadow: #666 2px 4px 3px;
		box-shadow: #666 2px 4px 3px;
		background: #FFFFFF;
		background: -webkit-gradient(linear, 0 0, 0 bottom, from(#FFFFFF), to(#EBEBEB));
		background: -webkit-linear-gradient(#FFFFFF, #EBEBEB);
		background: -moz-linear-gradient(#FFFFFF, #EBEBEB);
		background: -ms-linear-gradient(#FFFFFF, #EBEBEB);
		background: -o-linear-gradient(#FFFFFF, #EBEBEB);
		background: linear-gradient(#FFFFFF, #EBEBEB);
		-pie-background: linear-gradient(#FFFFFF, #EBEBEB);
		behavior: url(/pie/PIE.htc);
 padding: 10px;
 width: 200px;
 top: 0px;
 left: 0px;
 -webkit-transition: all .7s ease-out .1s;
 -moz-transition: all .7s ease-out .1s;
 -o-transition: all .7s ease-out .1s;
 transition: all .7s ease-out .1s
}
img { width: 100%; }
h2{
font-size: 11pt;
}
 .score{
    font-size: 11pt;
	font-weight: 500;
	color: #EA0C0C;
 }

</style>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			$(".various").fancybox({
		maxWidth	: 400,
		maxHeight	: 200,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
			
			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
		});
	</script>
	
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

	</style>
	


<script type="text/javascript" src="js/jquery.masonry.js"></script>
<script type="text/javascript" src="js/jquery.infinitescroll.js"></script>


<style type="text/css">


/* item_list */
.item_list{position:relative;padding:0 0 50px;}
.item{
	width:226px;background:#fff;overflow:hidden;margin:15px 0 0 0;
	border-radius:4px 4px 4px 4px;
	box-shadow:0 1px 3px rgba(34, 25, 25, 0.2);	
}
.item_t{padding:10px 8px 0;}
.item_t .img{background-color:#FFFFFF;margin:0 auto;position:relative;width:210px;min-height:210px;}
.item_t .img a{display:block;}
.item_t .img a:hover img{filter:alpha(opacity=80);-khtml-opacity:0.8;opacity:0.8;-webkit-transition:all 0.3s ease-out;-khtml-transition:all 0.3s ease-out;}
.item_t .price{
	position:absolute;bottom:10px;right:0px;background-color:rgba(0, 0, 0, 0.2);color:#FFF;
	filter:progid:DXImageTransform.Microsoft.gradient(startcolorstr=#33000000, endcolorstr=#33000000);
}
.item .btns{display:none;}
.img_album_btn{top:0px;right:0px;position:absolute;background:#ff6fa6;color:#ffffff;height:20px;line-height:20px;width:56px;border-radius:3px;}
.img_album_btn:hover{color:#fff;}
.item_t .title{padding:8px 0;line-height:18px;}
.item_b{padding:10px 8px;}
.item_b .items_likes .like_btn{background:url("images/fav_icon_word_new_1220.png") no-repeat;display:block;float:left;height:23px;width:59px;margin-right:5px;}
.item_b .items_likes em{line-height:23px;display:block;float:left;padding:0px 6px;color:#FF6699;font-weight:800;border:1px solid #ff6fa6;border-radius:3px;}

/* more */
#more{display:block;margin:10px auto 20px;}

/* infscr-loading */
#infscr-loading{bottom:-10px;left:45%;position:absolute;text-align:center;height:20px;line-height:20px;z-index:100;width:120px;}

/* page */
.page{display:none;font-size:18px;height:60px;text-align:center;margin:20px 0 0 0;}
.page_num a,.page_num span{margin:0 2px;background:url("images/page.png") no-repeat;display:inline-block;width:30px;height:28px;line-height:26px;overflow:hidden;}
.page_num a{background-position:-65px 0;color:#FF3333;overflow:hidden;}
.page_num .prev{background-position:1px -33px;}
.page_num .unprev{background-position:1px 0;cursor:default;}
.page_num .next{background-position:-32px 0;}
.page_num .unnext{background-position:-32px -33px;cursor:default;}
.page_num .current{background-position:-99px 0;color:#FFFFFF;}
.page_num .etc{background-position:-172px 8px;}

/* to_top */
.to_top a,.to_top a:hover{background:url("images/gotop.png") no-repeat}
.to_top a{
	background-position:0 0;float:left;height:50px;overflow:hidden;width:50px;position:fixed;bottom:35px;cursor:pointer;right:20px;
	_position:absolute;
	_right:auto;
	_left:expression(eval(document.documentElement.scrollLeft+document.documentElement.clientWidth-this.offsetWidth)-(parseInt(this.currentStyle.marginLeft, 10)||0)-(parseInt(this.currentStyle.marginRight, 10)||20));
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||20)-(parseInt(this.currentStyle.marginBottom, 10)||20)));
}
.to_top a:hover{background-position:-51px 0px;}
</style>

<script type="text/javascript">
var isWidescreen=screen.width>=1280; 
if(isWidescreen){document.write("<style type='text/css'>.demo{width:1194px;}</style>");}
</script>

<script type="text/javascript">
function item_masonry(){ 
	$('.item img').load(function(){ 
		$('.infinite_scroll').masonry({ 
			itemSelector: '.masonry_brick',
			columnWidth:226,
			gutterWidth:15								
		});		
	});
		
	$('.infinite_scroll').masonry({ 
		itemSelector: '.masonry_brick',
		columnWidth:226,
		gutterWidth:15								
	});	
}

$(function(){

	function item_callback(){ 
		
		$('.item').mouseover(function(){
			$(this).css('box-shadow', '0 1px 5px rgba(35,25,25,0.5)');
			$('.btns',this).show();
		}).mouseout(function(){
			$(this).css('box-shadow', '0 1px 3px rgba(34,25,25,0.2)');
			$('.btns',this).hide();		 	
		});
		
		item_masonry();	

	}

	item_callback();  

	$('.item').fadeIn();

	var sp = 1
	
	$(".infinite_scroll").infinitescroll({
		navSelector  	: "#more",
		nextSelector 	: "#more a",
		itemSelector 	: ".item",
		
		loading:{
			img: "images/masonry_loading_1.gif",
			msgText: ' ',
			finishedMsg: '木有了',
			finished: function(){
				sp++;
				if(sp>=10){ //到第10页结束事件
					$("#more").remove();
					$("#infscr-loading").hide();
					$("#page").show();
					$(window).unbind('.infscr');
				}
			}	
		},errorCallback:function(){ 
			$("#page").show();
		}
		
	},function(newElements){
		var $newElems = $(newElements);
		$('.infinite_scroll').masonry('appended', $newElems, false);
		$newElems.fadeIn();
		item_callback();
		return;
	});

});
</script>
</head>

	    <body >
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1>ImageAesthetic</h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.html" accesskey="1" title="">Homepage</a></li>
				<li class="current_page_item"><a href="photos.php" accesskey="2" title="">Photos</a></li>
			</ul>
		</div>
	</div>
</div>

		<div id="menu2">
			<ul>
				<li class="current_page_item"><a href="photos.php" accesskey="1" title="">Sort by date</a></li>
				<li><a href="photos_1.php" accesskey="2" title="">Sort by score</a></li>
			</ul>
		</div>


<?php
echo "	<div class='contain'>";  
$dbc=mysql_connect('127.0.0.1','kyz','family89')
	or die('Error connecting to MySQL server');
	$result = mysql_select_db('upload',$dbc) or die ('Can\'t use upload : ' . mysql_error());
	$result = mysql_query("SELECT * FROM images order by score DESC,date DESC");
	echo "	<div class='demo clearfix'>
		<div class='item_list infinite_scroll'>";
	while($temp = mysql_fetch_array($result))
	{
	$tmp = "score : ".$temp['score'];
	echo "	
	<div class='item masonry_brick'>
			<div class='item_t'>
				<div class='img'>
				<a href=\"{$temp['url']}\" class='fancybox-buttons' data-fancybox-group='button'  title='{$tmp}'><img src=\"{$temp['url']}\" /></a>
	<p><h2>score:{$temp['score']}</h2></p>
	</div></div></div>";  
	}
	echo "</div></div>";
?>

	</div>
		

<script type="text/javascript">
$(function(){

	$(window).scroll(function(){
		$(window).scrollTop()>1000 ? $("#gotopbtn").css('display','').click(function(){
			$(window).scrollTop(0);
		}):$("#gotopbtn").css('display','none');	
	});
	
});
</script>

</body>
</html>
