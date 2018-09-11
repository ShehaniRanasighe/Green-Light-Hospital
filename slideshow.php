<script>
var images = ["images/slide1.jpg", "images/slide2.jpg", "images/slide3.jpg","images/slide4.jpg","images/slide5.jpg","images/slide6.jpg"];

var i = 1;
var max = images.length;

function changeImage(){ 
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 3000);

</script>

<p align="center"><img src="images/s1.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
