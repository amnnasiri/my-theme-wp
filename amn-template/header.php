<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>دیجی کالا</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body dir="rtl"  >



	<div class=" header_mobile" >
		<div class=" d-flex justify-content-between " style="padding-left: 15px; padding-right: 15px;">

			<div class="col-4" onclick="cls()" >
				<i class="fa fa-bars fa-2x pointer"onclick="bar()"></i>
			</div>
			<div class="col-4 ">
				<a href="#"><img class="digikala d-flex inline-block " width="80" src="./Digikala.svg.png"></a>
			</div>
			<div class="col-4">
				<a href="#"><img class="d-flex inline-block float-start" width="30" src="./info.svg"></a>
			</div>
		</div>
	</div>

	<!-- header_mobile 2 -->
	<div class=" header_mobile" style="padding-left: 15px; padding-right: 15px;">
		<div class=" py-4 d-flex justify-content-between ">

		
				 
				<div class="col-7 srch-div">
					<input type="text" name="secrch" class="form-control form-control-lg  srch_inp"  style="padding-left: 40px;" onclick="openSearch()" placeholder="جست و جو">
					<i class="fa fa-search srch-icn"></i>
		
				</div>

				<div id="myOverlay" class="overlay">
					<span class="closebtn" onclick="closeSearch()" title="Close Overlay"><img src="./images/arrow-right.svg" style="width: 30px; margin-top: 20px;"></span>
					<div class="overlay-content">
					  <form action="">
						<input type="text" placeholder="Search.." name="search">
					  </form>
					</div>
				  </div>
				
		
			<div class="col-4 d-flex align-items-center justify-content-end">

				<button class="form-control lgn_btn w-50">
					<img src="input.svg" class="inpicn">

					<span class="btntxt">
						ورود 
					</span>
				</button>
				<a href="#"><img src="cart.svg"  class="carticn"></a>
			</div>
		</div>
	</div>
		</div>
	</div>

	<!-- header_mobile 3 -->
	<div class=" header_mobile justify-content-start" style="padding-left: 15px; padding-right: 15px;"> 
		<div class="col-12 d-flex align-items-center justify-content-between">

			<a id="myBtn2"  href="#" class="col-12" style="font-size:15px; margin-top: -10px;" onclick="openNavv()"> مکان خود را انتخاب کنید
			  
			  <svg class="float-start" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
	<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
  </svg></a>


</div>
</div>


<div id="myNavv" class="overlay1">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNavv()">&times;</a>
	<div class="overlay1-content">
		
		<a href="#" id="bargasht" onclick="bargasht()" style="text-align: center;" >برگشت </a><br>
			<div id="gil1"><a class="ostan d-block" href="#"><a href="#" onclick="gil()">گیلان</a></div>
			<div id="kerman1"><a class="ostan d-block" href="#"><a href="#" onclick="kerman()">کرمان</a></div>
			<div id="fars1"><a class="ostan d-block" href="#"><a href="#" onclick="fars()">فارس</a></div>
			<div id="yazd1"><a class="ostan d-block" href="#"><a href="#" onclick="yazd()">یزد</a></div>
			
		
			<div id="gil2"><a onclick="rasht()" class="ostanmob d-block" href="#">رشت</a><a onclick="lahijan()"  class="ostanmob d-block" href="#">لاهیجان</a><a onclick="astara()" class="ostanmob d-block" href="#">استارا</a><a onclick="foman()" class="ostanmob d-block" href="#"> فومن</a><a class="ostanmob d-block" href="#"> </a></div>
			<div id="kerman2"><a class="ostanmob d-block" href="#">رشت</a><a class="d-block" href="#">رشت</a><a class="ostanmob d-block" href="#">لاهیجان</a><a class="ostanmob d-block" href="#">استارا</a><a class="ostanmob d-block" href="#">کیا شهر</a></div>
			<div id="fars2"><a class="ostanmob d-block" href="#">رشت</a><a class="ostanmob d-block" href="#">رشت</a><a class="ostanmob d-block" href="#">لاهیجان</a><a class="ostanmob d-block" href="#">استارا</a><a class="ostanmobd-block" href="#">کیا شهر</a></div>
							

	</div>
  </div>
  



  <div class="modal2" id="modal2"></div>




<!-- nav-mobile-continue -->
<input type="hidden" id="sidsts" value="0" >

	<div class="sidemenu" id="sidemenu" >
	
		<i onclick="cls1()"><i class="fa fa-close mb-4 fa-2x text-danger"  onclick="barcls()" > </i></i>

		<p><img  src="./Digikala.svg.png" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</p>
		<p> <img  src="./Digikala.svg.png" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</p>

		
		<p style="position: sticky;"data-mdb-toggle="collapse"href="#collapseExample"role="button"aria-expanded="false"aria-controls="collapseExample">		
			<img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">مد و پوشاک</p>
		<div class="collapse" id="collapseExample">
			<p> خودرو تجهیزات صنعتی</p>
			<p> خودرو تجهیزات صنعتی</p>
			<p> خودرو تجهیزات صنعتی</p>

		</div>

		<p style="position: sticky;"data-mdb-toggle="collapse"href="#collapseExample2"role="button"aria-expanded="false"aria-controls="collapseExample">
			<img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">مد و پوشاک
		</p>
		<div class="collapse" id="collapseExample2">
			<p> خودرو تجهیزات صنعتی</p>
			<p> خودرو تجهیزات صنعتی</p>
		</div>
	</div>



	<!-- header-desctop1 -->
	<div class="container header_desk">

		<div class="row py-4 d-flex align-items-center">
			<div class="col-1" align="right">
				<a href="#"><img src="logo.svg" width="115" height="30" alt="logo"></a>
			</div>

			<div class="col-5 srch-div">
				<i class="fa fa-search srch-icn"></i>
				<input type="text" name="secrch" class="form-control form-control-lg  srch_inp " placeholder="جست و جو">
			</div>
			<div class="col-6 d-flex align-items-center justify-content-end margin-top " style="border-color: #E0E0E2;">
				<button class="form-control lgn_btn w-50" >
					<img src="input.svg" class="inpicn" style="margin-top:-40px;">
					<span class="btntxt"   >
						ورود | ثبت نام
					</span>
				</button>
				<a href="#"><img src="cart.svg"  class="carticn"></a>
		</div>
		</div>
	</div>

<!-- header-desktop2 -->


<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between header_desk " style="margin-left: 90px; margin-right: 50px; position: fixed;" >

	<div class=" container-fluid " style="font-size: 15px; ">
	  <ul class=" navbar-nav "  >

		<li class=" nav-item dropdown ">
		<div class="modal1" id="modal1" >		  </div>	
		  <div class="nav-link "id="super1" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="true" onmouseenter="cliick()" onmouseleave="cliicky()">


			<a href="#"   class=" dropbtn nav-item nav-link digi" style="float: right;  font-weight: bold;" ><img  src="./Digikala.svg.png" width="15" >سوپرمارکت</a></a>

			<ul class="  dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 20px;" > 


	<a href="#" class="itemnav" style="float: right; text-align: right;  width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	<ul class="dropdown-menu dropdown-submenux "id="subb1"  >

		<li class="col-3 d-inline-block float-end">
			<a class=" dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
			</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
			<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
			
		<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
		</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
		<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>
		<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>
		
		<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
		</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>

		<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
		</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
		</li><li class="col-3 d-inline-block float-end">
		
			<a href="#" class=" menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>
		
			<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
			</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
			<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
			
			<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
			</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
			<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	


	</li></ul> 


<!-- *******************************************************  -->
<li>
	<a class=""  href="#">
		<a href="#" class="itemnav"style="float: right; text-align: right;  width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>




</li><li>

	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
<!---********************************************************************************* -->

<li>
	<a class=""  href="#">
		<a href="#" class="itemnav"style="float: right; text-align: right;  width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>




</li><li>

	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
<!---***************************************************************************************************-->

<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right;  color: width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li><li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	


</li> <li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	


</li> <li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
<!--****************************************************************************************************************************-->

<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right;  width: 200px; margin-right: 8px;" ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	



</li><li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	




</li> <li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	


</li> <li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
<!--       ********************************************************************************************************************************************  -->

<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right; color: width: 200px; margin-right: 8px;" ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>

</li><li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>



</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>

</li> <li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>
</li></ul> </li>
<!---***********************************************************************************************************s-->

<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right;  width: 200px; margin-right: 8px;" ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	

</li><li>

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>



</li> <li>
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	


<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>
</li> <li>

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	

<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;">
<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>	گوشی موبایل<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg>
</a><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">سامسونگ</a>
</li></ul> </li>
<!--  ******************************************************* --> 
<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right;  width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>




</li><li>

	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>

<!-- ************************************************************************* -->
<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right; width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>




</li><li>

	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازfdbdfbbم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
<!--  ***********************************************************************************************-->
<li>
	<a class=""  href="#">
		<a href="#" class="itemnav" style="float: right; text-align: right; width: 200px; margin-right: 8px; " ><img  src="./images/box-arrow-in-left.svg" width="15"  style="margin-left: 10px; "> خودرو تجهیزات صنعتی</a>
	</a>
	<ul class="dropdown-menu dropdown-submenu" id="sub2">
<li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>




</li><li>

	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a>

	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازfdbdfbbم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li> <li>
	<a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical img2" viewBox="0 0 16 16" style="color: red;"><path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
	</svg>لوازم جانبی گوشی<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16" style="color: red;"><path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/></svg></a>
	<a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br><a href="#" class="menu-gray float-end" style="margin-right: 30px; font-size:12px">کاور</a><br>	
	

</li></ul> </li>
</li>
</ul>


		</li>

	<a href="#" id="super" class="nav-item nav-link " style="float: right; text-align: right;"><img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</a>
	<a href="#" id="super" class="nav-item nav-link " style="float: right; text-align: right;"><img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</a>
	<a href="#" id="super" class="nav-item nav-link " style="float: right; text-align: right;"><img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</a>
	<a href="#" id="super" class="nav-item nav-link " style="float: right; text-align: right;"><img  src="./images/box-arrow-in-left.svg" width="15" alt="" style="margin-left: 10px;">سوپرمارکت</a>
	  </ul>
	  <a id="myBtn" href="#" style="margin-top: -24px;font-size: 14px;" ><img src="./images/geo-alt.svg" height="20" style="margin-left: 5px; " alt="CoolBrand"  >مکان خود را انتخاب کنید</a>

<div id="myModal" class="modal">

  <!-- locate-desk -->
  <div class="modal-content"> 
	  <p class="justify-content-between col-12 d-flex d-inline-block" >انتخاب شهر
    <span class="close" style="margin-top: -4px;">&times;</span>
	<hr style="margin-top:-20px">
</p>

<a id="bargasht-desk" onclick="bargashtdesk()" style="margin-bottom: 20px;" href="#" >برگشت </a>
	<div id="gil1desk"><a href="#" class="ostan d-inline-block d-flex justify-content-between col-12" onclick="gildesk()">گیلان<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="hormoz1desk"><a href="#" class="ostan d-inline-block d-flex justify-content-between col-12" onclick="hormozdesk()">هرمزگان<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="kerman1desk"><a href="#" class="ostan d-inline-block d-flex justify-content-between col-12" onclick="kermandesk()">کرمان<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="fars1desk"><a href="#" class="ostan d-inline-block d-flex justify-content-between col-12" onclick="farsdesk()">فارس<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="yazd1desk"><a href="#" class="ostan d-inline-block d-flex justify-content-between col-12" onclick="yazddesk()">یزد<img src="./images/chevron-left.svg" width="15"></a></div>

	<div id="gil2desk"><a  class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="rasht()" >رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="langrud()">لنگرود<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="lahijan()">لاهیجان<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="astara()">استارا<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="foman()">فومن<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="hormoz2desk"><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="bandarabbas()" >بندرعباس<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="kish()">کیش<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="qeshm()">قشم<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#" onclick="hormoz()">هرمز<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="kerman2desk"><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a></div>
	<div id="fars2desk"><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a><a class="ostandesk d-inline-block d-flex justify-content-between col-12 " href="#">رشت<img src="./images/chevron-left.svg" width="15"></a></div>

	</div>
  </nav>




			<script src="./javame.js"></script>
<!-- <script src="js/bootstrap.bundle.min.js"></script> -->
<script src="js/script.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
