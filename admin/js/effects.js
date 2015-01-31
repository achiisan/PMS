$(document).ready(function(){

	$("#initial").hide();
	$("#choices").hide();
	$("#initial").show(1000);
  $('.dropdown-toggle').dropdown();
	$("#start").click(function(){
		$("#initial").hide(1000);
	});

	$("#invokepopup").click(function(){
		$("#choices").show(1000);
	});

  $("input[name='payment']").click(function() {
    var value = $('input[name=payment]:checked').val();
    if(value === 'CreditCard'){
      $('#show-me').show();
    }
    else{
      $('#show-me').hide();
    }
    });
});
  

function modalshow($id_beli) {
		$("#forme2").show(1000);
		$.ajax({
      cache: false,
      type: 'GET',
      url: 'editmenuitem.php',
      data: 'food_id=' + $id_beli,
      success: function(data) {
      	
        $('#content').html(data); //this part to pass the var
      }
     });
 }

 function modalshow2($id_beli) {
		
		$.ajax({
      cache: false,
      type: 'GET',
      url: 'orderslipbare.php',
      data: 'fplanid=' + $id_beli,
      success: function(data) {
      	
        $('#orderslip').html(data); //this part to pass the var
      }
     });
 }

 function modalshow3($id_beli) {
    setVisibility('formf');
    $.ajax({
      cache: false,
      type: 'GET',
      url: 'orderslipbare.php',
      data: 'fplanid=' + $id_beli,
      success: function(data) {
        
        $('#orderslip').html(data); //this part to pass the var
      }
     });
 }
