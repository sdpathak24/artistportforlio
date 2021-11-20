burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
navList = document.querySelector('.nav-list')
/*rightNav = document.querySelector('.rightNav')*/
socials = document.querySelector('.socials')
icons = document.querySelector('.icons')



burger.addEventListener('click', ()=>{
    /*rightNav.classList.toggle('v-class-resp');*/
    icons.classList.toggle('v-class-resp');
    navList.classList.toggle('v-class-resp');
    navbar.classList.toggle('h-nav-resp');
    /*socials.classList.toggle('v-class-resp');*/
})

/*$('#newsletter-id').on('submit', function(e){
	e.preventDefault();
	var formdata = $("#email").serialize();
	var url = $(this).attr("action");
	$.ajax(url, {
        method: "POST",
        dataType: "JSON",
        data: formdata,
        beforeSend: function(){
        	$('#mesage').html("<div class='newsletter-thankyou'>Please wait...</div>");
        }
    }).done(function (result) {
        if(result.success){
            $('#mesage').html("<div class='newsletter-thankyou'>" + result.message + "</div>");
            $('#newsletter-id').reset();
        }else {
            $('#mesage').html("<div class='newsletter-thankyou'>" + result.message + "</div>");
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        console.log(errorThrown,textStatus);
        //$('#mesage').html("<div class='newsletter-thankyou'>An unexpected error occured</div>");
    });
});*/