

<link rel="stylesheet" href="application/views/atoa/popup/reveal.css">	

<!-- Attach necessary scripts -->
<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>-->
<!--<script type="text/javascript" src="popup/jquery-1.6.2.js"></script> -->
<script type="text/javascript" src="application/views/atoa/popup/jquery.reveal.js"></script>
<script type="text/javascript">

function showModal() {
   // alert("hello");
    
       $('#myModal').reveal();
       
       setTimeout(function(){
           $('#myModal').trigger('reveal:close');
       },5000); // 5 seconds
    
}        
</script>

<div id="myModal" class="reveal-modal">
	<center>
    <img src="application/views/atoa/popup/underconstruction.png">
     <a href="mailto:info@atouchofasia.travel">
    <div style="position:absolute; width:200px; height:40px; margin-top:-100px; margin-left:200px;"></div>
    </a>
    </center>
    <a class="close-reveal-modal">&#215;</a>
</div>
