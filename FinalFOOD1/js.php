<script>
	function f4(){
           var modal=document.getElementById('pop4');
           var btn1=document.getElementById("login");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
		
		   function f5(){
           var modal=document.getElementById('pop5');
           var btn1=document.getElementById("cart");
           var span = document.getElementsByClassName("close")[0];
        
            btn1.onclick =function(){
                modal.style.display="block";
            }
            span.onclick = function() {
            modal.style.display = "none";
			}
            window.onclick=function(event){
                if(event.target == modal) {
                    modal.style.display="none";
                }
            }
		}
</script>
