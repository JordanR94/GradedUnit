<script>

$(document).ready(function(){

var quantity=0;

   $('.quantity-add-3').click(function(e){

		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		quantity = parseInt($('.quantity-3').val());
		// If is not undefined
			
			$('.quantity-3').val(quantity + 1);
		  
			// Increment
		
	});

	 $('.quantity-minus-3').click(function(e){
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		quantity = parseInt($('.quantity-3').val());

		// If is not undefined
	  
			// Increment
			if(quantity>0){
			$('.quantity-3').val(quantity - 1);
			}
		
	});
	
	
});




$(document).ready(function(){

var quantity=0;
$('.quantity-add-4').click(function(e){

// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-4').val());

// If is not undefined
	
	$('.quantity-4').val(quantity + 1);

	
  
	// Increment

});

$('.quantity-minus-4').click(function(e){
// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-4').val());

// If is not undefined

	// Increment
	if(quantity>0){
	$('.quantity-4').val(quantity - 1);
	}
});

});

$(document).ready(function(){

var quantity=0;
$('.quantity-add-5').click(function(e){

// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-5').val());
// If is not undefined
	
	$('.quantity-5').val(quantity + 1);
	
  
	// Increment

});

$('.quantity-minus-5').click(function(e){
// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-5').val());

// If is not undefined

	// Increment
	if(quantity>0){
	$('.quantity-5').val(quantity - 1);
	}
});

});

$(document).ready(function(){

var quantity=0;
$('.quantity-add-6').click(function(e){

// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-6').val());
// If is not undefined
	
	$('.quantity-6').val(quantity + 1);
	
  
	// Increment

});

$('.quantity-minus-6').click(function(e){
// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity = parseInt($('.quantity-6').val());

// If is not undefined

	// Increment
	if(quantity>0){
	$('.quantity-6').val(quantity - 1);
	}
});

});

//calculates the total amount of all tickets purchased
function calcTotal(adultQuant, adultPrice, childQuant, childPrice, seniorQuant, seniorPrice, familyQuant, familyPrice){
let adult = adultQuant * adultPrice;
let child = childQuant * childPrice;
let senior = seniorQuant * seniorPrice;
let family = familyQuant * familyPrice;
let total = adult + child + senior + family;
document.getElementById("total-price-tickets").innerHTML = "£" + total;

};

//calcualtes total for adult tickets
function adultTotal(adultQuant, adultPrice){
let adult = adultQuant * adultPrice;
document.getElementById("adult-total").innerHTML = "£" + adult;
};

//calcualtes total for child tickets
function childTotal(childQuant, childPrice){
let child = childQuant * childPrice;
document.getElementById("child-total").innerHTML = "£" + child;
};

//calculates total for senior tickets
function seniorTotal(seniorQuant, seniorPrice){
let senior = seniorQuant * seniorPrice;
document.getElementById("senior-total").innerHTML = "£" + senior;
};

//calculates total for family tickets
function familyTotal(familyQuant, familyPrice){
let family = familyQuant * familyPrice;
document.getElementById("family-total").innerHTML = "£" + family;
};

//finds the value for each ticket 
document.getElementById("calc-total-price").addEventListener('click',function(){
		//parses them into an integer
		var adultQuant = parseInt(document.getElementById("quantity-3").value);
		var childQuant = parseInt(document.getElementById("quantity-4").value);
		var seniorQuant = parseInt(document.getElementById("quantity-5").value);
		var familyQuant = parseInt(document.getElementById("quantity-6").value);
		var adultPrice = 10;
		var childPrice = 5;
		var seniorPrice = 8;
		var familyPrice = 20;
		var total = adultQuant + childQuant + seniorQuant + familyQuant;

		//calls the functions 
		calcTotal(adultQuant, adultPrice, childQuant, childPrice, seniorQuant, seniorPrice, familyQuant, familyPrice);
		adultTotal(adultQuant, adultPrice);
		childTotal(childQuant, childPrice);
		seniorTotal(seniorQuant, seniorPrice);
		familyTotal(familyQuant, familyPrice);
		//displays the billing form if the total amount is more than 0
		if(total !== 0){
			document.getElementById("visit-booking-form").style.display = "inline";
		}
		else{
			document.getElementById("visit-booking-form").style.display = "none";
		}
		});


//finds the form details 
document.getElementById("visit-submit").addEventListener('click',function(){
	//takes the forms input values and turns them into a variable
	var firstname = document.getElementById("visit-firstname").value;
	var surname = document.getElementById("visit-lastname").value;
	var address = document.getElementById("visit-address").value;
	var town = document.getElementById("visit-town").value;
	var postcode = document.getElementById("visit-postcode").value;
	var phone = document.getElementById("visit-phone").value;
	var email= document.getElementById("visit-email").value;

	//if statement to make sure nothing is missing before the purchase message has been displayed
	if(firstname !== "" && surname !== "" && address !== "" && town !== "" && postcode !=="" && phone !== "" && email !== ""){
		document.getElementById("confirm-tickets").style.display = "inline";
	}
	else{
		document.getElementById("confirm-tickets").style.display = "none";
	}
	});

	
	</script>