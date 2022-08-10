<html dir="rtl">
<head>
	<script type="text/javascript">
		function tab(t){
			var spans = document.getElementsByTagName("span");
				for(var i =0; i < spans.length; i++){
					var ID = spans[i].getAttribute("id");
					if(ID == t){
						spans[i].style.zIndex = 1;
					}else{
						spans[i].style.zIndex = 0;
					}
				}
		}
	</script>
	<style>
		#tab{
			background: #ebebeb;
			border:1px solid cacaca;
			border-radius:6px;
			padding:8px;
			width:500px;
			height:250px;
		}
		#tab1,#tab2,#tab3{
		position:absolute;
		top:54px;
		height:200px;
		width:484px;
		background:#fff;
		border:1px solid #cecece;
		display:block;
		margin-right:4px;
		box-shadow:inset 0px 0px 25px #ececec;
		}
		#tab a{
		background:#fff;
		text-decoration:none;
		border:1px solid #cecece;
		display:inline-block;
		margin-right:4px;
		padding:8px 4px 4px 4px;
		box-shadow:inset 0px 0px 25px #ececec;
		border-radius:4px;
		height:20px;
		width:70px;
		color:#CACACA;
		text-align:center;
		font-familly:tahoma;
		font-size:12px;
		font-weight:bold;
		color:#cc0000;
		}
		#tab a:hover{
		box-shadow:inset 2px 2px 2px #ececec,1px 1px 0px #cacaca;
		color:#0000CC;
		}
		
		#header{
			width: 100%;
			height: 170px; 
			background-color: #dc9917;
			-webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.58), inset 0 0 0 1px rgba(255,255,255,.19); 
			-moz-box-shadow: inset 0 0 100px rgba(0,0,0,.58), inset 0 0 0 1px rgba(255,255,255,.19);
			box-shadow: inset 0 0 100px rgba(0,0,0,.58), inset 0 0 0 1px rgba(255,255,255,.19);
			border: solid 1px #444;
			background-image:-webkit-linear-gradient(bottom, #7d7e7d, #878787 99%);
			background-image: -moz-linear-gradient(bottom, #7d7e7d, #878787 99%);
			background-image: -o-linear-gradient(bottom, #7d7e7d, #878787 99%);
			background-image: -ms-linear-gradient(bottom, #7d7e7d, #878787 99%); 
			background-image: linear-gradient(to top, #7d7e7d, #878787 99%);
		}
		#navbar{
			width: 100%;
			height: 50px;
			background-color: #fff;
			-webkit-box-shadow: inset 0 0 0 1px #fff;
			-moz-box-shadow: inset 0 0 0 1px #fff;
			-ms-box-shadow: inset 0 0 0 1px #fff;
			box-shadow: inset 0 0 0 1px #fff; 
			border: solid 1px #000; 
			background-image: -webkit-linear-gradient(bottom, #fcfcfc 58%, #d5d5d5);
			background-image: -moz-linear-gradient(bottom, #fcfcfc 58%, #d5d5d5);
			background-image: -o-linear-gradient(bottom, #fcfcfc 58%, #d5d5d5); 
			background-image: -ms-linear-gradient(bottom, #fcfcfc 58%, #d5d5d5); 
			background-image: linear-gradient(to top, #fcfcfc 58%, #d5d5d5);
		}
		span#host{
			position:absolute;
			left:40px;
			top:30px;
		}
		#navbar a{
	width: 80px; 
	height: 36px;
	padding-top:14;
	display:inline-block;
	margin-right:1px;
	text-decoration:none;
	font-family:tahoma;
	font-size:14px;
	font-weight:bold;
	color:#333;
	text-align:center;
		}
		#navbar a:hover{
		color:#0f6589;
	-webkit-box-shadow: inset 0 0 0 1px #f1f1f1;
	-moz-box-shadow: inset 0 0 0 1px #f1f1f1;
	box-shadow: inset 0 0 0 1px #f1f1f1; 
	background-image: -webkit-linear-gradient(bottom, #e9e9e9, #fff 48%);
	background-image: -moz-linear-gradient(bottom, #e9e9e9, #fff 48%);
	background-image: -o-linear-gradient(bottom, #e9e9e9, #fff 48%);
	background-image: -ms-linear-gradient(bottom, #e9e9e9, #fff 48%);
	background-image: linear-gradient(to top, #e9e9e9, #fff 48%); 
		}
	</style>
</head>
<body> <!--
	<div id="tab">
		<a href="javascript:tab('tab1');">txt1</a>
		<a href="javascript:tab('tab2');">txt2</a>
		<a href="javascript:tab('tab3');">txt3</a>
		<span id="tab1">»”„ «··Â «·—Õ„‰ «·—ÕÌ„</span>
		<span id="tab2">·« ≈·Â ≈·« «··Â „Õ„œ —”Ê· «··Â ’·Ï «··Â ⁄·ÌÂ Ê”·„</span>
		<span id="tab3">≈‰„« «·„ƒ„‰Ê‰ ≈ŒÊ…</span>
		
	</div> -->
	<div id="navbar">
		<a href="#">«·—∆Ì”Ì…</a>
		<a href="#">„‰ ‰Õ‰ø</a>
		<a href="#">„”«⁄œ…</a>
		<a href="#">√⁄„«·‰«</a>
		<a href="#">≈ ’· »‰«</a>
	</div>
	<DIV id="header">
	<a href="index.php" style="border:none;"><img style="border:none;" src="LOgo.png" /></a>
	</div>
	<span id="host"><img src="SERVER.png"/></span>
</body>
</html>