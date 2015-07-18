<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" media="screen" href="block.css">
<script type="text/javascript" src="jquery-1.3.2.js"></script>
<script src="jquery.blockUI.min.js"></script>
<script src="http://malsup.github.io/jquery.blockUI.js"></script>
<script src="http://malsup.github.com/chili-1.7.pack.js"></script>
<script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
            $(document).ready(function(){
                $('#my_submit').click(function() {
                    $('#form_loading_message').show();
                    setTimeout('submitForm()', 1000);
                });
            });

            function submitForm(){
                $('#my_form').submit();
            }
			
			$(function(){
				$("#browseTrue").css({"opacity":"0","width":"190px","height":"24px"});
			});

			function setFilePath(){
			$("#browseText").val(document.forms["my_form"].file.value);
			};

        </script>
<style type="text/css">
	body{
    font-family: 'Open Sans', sans-serif;
    font-size: 12pt;
	font-weight: 500;
	color:#666;
	}
	h1{
    font-family: Verdana,Geneva, sans-serif;
    font-size: 12pt;
	font-weight: 500;
	}
	#browseTrue {
	position:absolute;
	z-index:2;
	}

	#browseText, #browse {
	position:relative;
	z-index:1;
	}
	#browseText {
	width:100px;
	padding:3px;
	border:1px solid #d0d0d0;
	}
	.browse {
	background:#eee;
	border:1px solid #ccc;
	height:23px;
	padding:0 16px;
	color:#666;
	}
  	</style>
	</head>
<body>
<div class="text">
<form action="upload.php" method="post" enctype="multipart/form-data" name="my_form" id="my_form">
Select a file:<input  id="browseTrue" size="10" type="file" name="file" onChange="setFilePath()"/>
<input type="text" id="browseText">
<input class="browse" type="button" value="Browse" />
<input id="my_submit" class="browse" type="button" name="my_submit" value="Upload" />
<div id="form_loading_message" style="display:none;"> 
        <h1><img src="images/busy.gif" /> Please wait, calculating the score...</h1> 
    </div>
</form>
</div>

</body>
</html>