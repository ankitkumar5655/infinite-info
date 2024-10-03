const triggerBtn = document.querySelector("#trigger-btn");
const modalWrapper = document.querySelector(".modal-wrapper");
const closeBtn = document.querySelector(".close-btn");

triggerBtn.addEventListener("click",function(){
   modalWrapper.classList.add("modal-wrapper-active");

});


closeBtn.addEventListener("click",function(){
    modalWrapper.classList.remove("modal-wrapper-active");
 
 });


 modalWrapper.addEventListener("click",function(e){
     if(e.target !== modalWrapper) 
     return;
    modalWrapper.classList.remove("modal-wrapper-active");
 
 });

 document.querySelector('#show-signup-form-btn').addEventListener('click', function()
	{
		document.querySelector('.front-panel').classList.add('front-panel-active');
		document.querySelector('.sign-in-panel').classList.add('sign-in-panel-active');
		document.querySelector('.sign-up-panel').classList.add('sign-up-panel-active');
		document.querySelector('.close-btn').classList.add('close-btn-active');
	}
);


 document.querySelector('#show-signin-form-btn').addEventListener('click', function()
	{
		document.querySelector('.front-panel').classList.remove('front-panel-active');
		document.querySelector('.sign-in-panel').classList.remove('sign-in-panel-active');
		document.querySelector('.sign-up-panel').classList.remove('sign-up-panel-active');
		document.querySelector('.close-btn').classList.remove('close-btn-active');
	}
);



var show_SignIn_Btn = document.querySelector("#show-signin-form-btn");
var create_AC_Btn = document.querySelector(".create-account-btn");

create_AC_Btn.addEventListener("click",function(){
	      create_AC_Btn.innerHTML = "Signing Up ...";
      });


show_SignIn_Btn.addEventListener("click",function(){
		create_AC_Btn.innerHTML = "Create Account";
	});
	


