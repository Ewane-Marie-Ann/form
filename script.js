
const signUpButton= document.getElementById('signUpButton');
const signInButton= document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm= document.getElementById('signUp');
//adding an event listener on the signup button//
signUpButton.addEventListener('click',()=>{
   signInForm.style.display="none";
    signUpForm.style.display="block";

})


//adding an event listener to the signIn button
signInButton.addEventListener('click',()=>{
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

