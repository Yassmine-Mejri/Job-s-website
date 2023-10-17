const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});



let pseudo=document.getElementById("pseudo");
let password=document.getElementById("password");

let pseudo1=document.getElementById("pseudo1");
let password1=document.getElementById("password1");

let cname=document.getElementById("cname");
let ceoname=document.getElementById("ceoname");
let ceoemail=document.getElementById("ceoemail");
let code=document.getElementById("code");

let forme=document.getElementById("forme");


function validateInput(){
    
        //check pseudo is empty 
        if(pseudo.value.trim()===""){
           onError(pseudo,"Pseudo can not be empty");
        }else{
            onSuccess(pseudo);
        }
    
        if(cname.value.trim()===""){
          onError(cname,"Company Name can not be empty");
       }else{
           onSuccess(cname);
       }
    
       if(ceoname.value.trim()===""){
        onError(ceoname,"CEO Name can not be empty");
     }else{
         onSuccess(ceoname);
     }
    
        //email
        if(ceoemail.value.trim()===""){
            onError(ceoemail,"Please enter your email");
        }else{
            if(!isValidEmail(ceoemail.value.trim())){
                onError(ceoemail,"Email is not valid");
            }else{
                onSuccess(ceoemail);
            }
        }
    
        //password
        if(password.value.trim()===""){
            onError(password,"Please enter your password");
         }else{
             onSuccess(password);
         }
    
         // code
    
         if(code.value.trim()===""){
      onError(code,"Code cannot be empty");
    }else{
        onSuccess(code);
    }
       
    }
    
    




  function validateInput1(){
  
   if(pseudo1.value.trim()===""){
    onError(pseudo1,"Please enter your pseudo");
  }else{
     onSuccess(pseudo1);
  }
  
  if(password1.value.trim()===""){
    onError(password1,"Please enter your password");
  }else{
     onSuccess(password1);
  }
  }




  document.querySelector("#check")
  .addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput1();
});

document.querySelector("#check2")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput();
});



function onSuccess(input){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="hidden"; 
    parent.classList.remove("error");
    parent.classList.add("success");  
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEle=parent.querySelector("small");
    messageEle.style.visibility="visible";
    messageEle.innerText=message;  
    parent.classList.add("error");
    parent.classList.remove("success");

}

function isValidEmail(ceoemail){
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(ceoemail);
 }
 
 function isValidCode(e){
   var x= e.which || e.keycode;
   if((x >= 48 && x<= 57))
     return true;
   else
     return false;  
 }
 
 
