<?php
  session_start(); 
 include 'h.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
		*{
  margin: 0;
  padding: 0;
    }
    body, html {
  height: 100%;
  margin: 0;
}


.bg{
    no-repeat center center;
    min-height: 45rem;
}
		nav{
    width: 100%;
    height: 80px;
    background-color: #0005;
    line-height: 80px;
}

nav ul{
    float: right;
    margin: 0;
    margin-right: 1.9rem;
}

nav ul li{
    list-style-type: none;
    display: inline-block;
}

nav ul li a{
    text-decoration: none;
    color: #fff;
    padding: 20px;
}



nav ul li:hover{
    background-color: coral;
    color: #000;
    font-weight: bold;
    font-size: 1.2rem;
}
.img{
    width: 10%;
    margin-left: 1.9rem;
    margin-top: 1%;
}


body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
.footer{
  background-color: #24262b;
  padding: 70px 0;
}
.container{
  max-width: 1170px;
  margin: auto;
}
ul{
  list-style: none;
}
.footer-col{
  width: 25%;
  padding: 0 15px; 
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 30px;
  font-weight: 500;
  position: relative;

}
.footer-col h4::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 100;
  color: #bbbbbb;
  display: block;
}
.about{
  color: green;
}
	</style>




</head>
<body>

 
 
 <!--background start !-->     

<img src="photo/school.jpeg" class="bg">
 <!--background over !-->     


<!--about start!-->
	<div class="about">
		<div class="section">
		<b><p>Dedicated to Excellence is the gradual result of always striving to do better.<br><br> A.P.S School Dwarka's mission is to provide education and to encourage 'Lateral', 'Creative' and 'Innovative' thinking which would propel students towards a world of continuous change and empower them to manage their future.<br><br> Intelligent questions. Perplexing questions. Confusing questions. Probing questions. Questions keep the world ticking. At Maxfort we understand that the curious mind of a child is a happy cauldron of questions. And therefore we ensure that every time...</p></b>
	</div>
	</div>
  <!--about over!-->

	<!--Footer!-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul class="ul">
           <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program </a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul class="ul">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul class="ul">
            <li><a href="#">book</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>location</h4>
          <div class="social-link">
          <ul class="ul">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.415164053787!2d72.48981531483876!3d23.22797481444901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c266e02723167%3A0x97a85237e6b3d85!2sAryan%20Public%20School!5e0!3m2!1sen!2sin!4v1651478759255!5m2!1sen!2sin" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



            </ul>
        </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>