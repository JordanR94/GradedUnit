<script>

//sets the date value to zero
document.getElementById("event-date").value = "";

//finds id event-book with event listener 
document.getElementById("event-book").addEventListener('click',function(){
    //sets up variables from the ids taken 
	var firstname = document.getElementById("event-firstname").value;
	var surname = document.getElementById("event-lastname").value;
	var phone = document.getElementById("event-phone").value;
    var email = document.getElementById("event-email").value;
    var date = document.getElementById("event-date").value;

    //if statement if each variable does not equal no value 
    if(firstname !== "" &&  surname !== "" && phone !== "" && email !== "" && date !== "")
    {
        //changes style of the id to display inline
        document.getElementById("confirm-event").style.display = "inline";
    }
    else{
        //changes style of the id to display none
        document.getElementById("confirm-event").style.display = "none";
    }
	});
//sets the html calander to not let any date be picked that is before the present date
   var today = new Date().toISOString().split('T')[0];
  document.getElementsByName("date")[0].setAttribute('min', today);
</script>