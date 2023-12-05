<?php
    include("header.php");
?>
<div class="text-center" id = "info">
  <img src="iron_man.jpg" class="rounded" alt="..." height="350px" width="500px" >
  
</div>

<br><br>
<center><button type="button" class="btn btn-secondary" onclick="change_data()"><b>Change data</b></button></center>

</body>
<script>
   function change_data(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.status == 200){
                document.getElementById("info").innerHTML = this.responseText;
            }
        };
        xhr.open("GET","ironman_info.txt",true);
        xhr.send();
    }    
</script>
</html>