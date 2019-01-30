 <head>
 	<link rel="stylesheet" type="text/css" href="accordion_button.css">
 </head>
 <body>
 <button class="accordion"><b>Our mission/Vision</b></button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion"><b>Quality Policy Statement</b></button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div>

<button class="accordion"><b>Ojectives</button>
<div class="panel">
  <p>Lorem ipsum...</p>
</div> 
<button class="accordion"><b>Core Values</button>
 <div class="panel">
  <p>Lorem ipsum...</p>
   </div> 
</body>
<script type="text/javascript">
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
} 
</script>