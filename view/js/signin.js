$('#signin').click(function(){
    $('#container').show(1000);
    
});
$('#close').click(function () 
{
        $('#container').slideUp(1000);
});
jQuery(document).ready(function() {
jQuery('#logform').validate({
    rules:{
        email:{
            required:true,
            email:true,
            
        },
        pass:{
            required:true,
        },

    }, 
    messages:{
        email:{
            required:"* Please enter your email*",
            email:"*Please enter valid email*"
        },
        pass:{
            required:"* Please enter your password *",

        },

    }
})
});