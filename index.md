<!-- 
	 Author	:	Eslam Ehab Aboutaleb
	 Date	:	12/11/2020
	 version:	v01
-->

<!DOCTYPE html>
<html>
<head>
	<!-- Web page title -->
	<title>ARM OTA Bootloader </title>
	<!-- include CSS file -->
	<link rel="stylesheet" href="style.css">
</head>	
<body>
	<!-- main class options -->
	<div class="main">
		<nav>
		
			<div class = "logo">
				<img src="Arm.png">
			</div>
			<div class = "nav-links">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="Authors.html">Authors</a></li>
					<li><a href="Bootloader Commands list.pdf" target="_blank">Bootloader commands list</a></li>
					<li><a href="https://github.com/Mohamed-Saiyed/OverTheAir-Bootloader" target="_blank">Source code</a></li>
				</ul>
			</div>
			
		</nav>
		
		<!-- Information class -->
		<div class="information">
			<div class= "overlay"></div>
			<img src="stm.png" class="mirco">
			<div id="circle">
			
				<div class="feature one">
					<div>
						<li><a href="BootApp.html">Bootloader App</a></li>
					</div>	
				</div>
				<div class="feature two">
					<div>
						<li>Bootloader manual</li>
					</div>	
				</div>
				<div class="feature three">
					<div>
						<li>Bootloader version</li>
					</div>	
				</div>
				
				<div class="feature four">
					<div>
						<li>Bootloader Circuit</li>
					</div>	
				</div>
			
			</div>
		</div>	
		<div class="controls">
			<img src="arrow.png" id="upBtn">
			<h3>Features</h3>
			<img src="arrow.png" id="downBtn">
		</div>
	</div>
	
	<script>
		var circle = document.getElementById("circle");
		var upBtn = document.getElementById("upBtn");
		var downBtn = document.getElementById("downBtn");
		
		var rotateValue = circle.style.transform;
		var totateSum;
		
		upBtn.onclick = function()
		{
			rotateSum = rotateValue + "rotate(-90deg)";
			circle.style.transform = rotateSum;
			rotateValue = rotateSum;
		}
		downBtn.onclick = function()
		{
			rotateSum = rotateValue + "rotate(90deg)";
			circle.style.transform = rotateSum;
			rotateValue = rotateSum;
		}
		Home.onclick = function()
		{
			
		}
	</script>

</body>
</html>
