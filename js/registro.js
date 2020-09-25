$(document).ready(function(){
   $('#contactform').submit(function(event){
		event.preventDefault();
      $.ajax({
			type: 'POST',
         data: $(this).serialize(),
         url: "./register.php",
         success: function(data) {
            $('#contactform').css('display',' none');
            $('.thanks').css('display','block');
          },    
			error: function(data){
            //Cuando la interacción retorne un error, se ejecutará esto.
            console.log('nos se puedo guardar ')

         }
      });
   })
});