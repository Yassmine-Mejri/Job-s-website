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




//controle de saisie



let pseudo2=document.getElementById("pseudo2");
let password2=document.getElementById("password2");

let pseudo3=document.getElementById("pseudo3");
let password3=document.getElementById("password3");



let fname = document.getElementById("fname");
let sname = document.getElementById("sname");
let email = document.getElementById("email");
let cin = document.getElementById("cin");


let formd=document.querySelector("#formd");


//seeker
function validateInput() {
  //check fname is empty
  if (fname.value.trim() === "") {
    onError(fname, "Please enter your first name");
  } else {
    onSuccess(fname);
  }
  //check sname is empty
  if (sname.value.trim() === "") {
    onError(sname, "Please enter your second name");
  } else {
    onSuccess(sname);
  }

  //check email is empty
  if (email.value.trim() === "") {
    onError(email, "Please enter your email");
  } else {
    if(!isValidEmail(email.value.trim())){
      onError(email, "Email is not valid");
    }else{
    onSuccess(email);
    }
  }
  //check pseudo1 is empty
  if (pseudo3.value.trim() === "") {
    onError(pseudo3, "Please enter your pseudo");
  } else {
    onSuccess(pseudo3);
  }
  //check pasword1 is empty
  if (password3.value.trim() === "") {
    onError(password3, "Please enter your password");
  } else {
    onSuccess(password3);
  }

  if(cin.value.trim()===""){
    onError(cin,"Cin can not be empty");
  }else{
      onSuccess(cin);
  }
     
  }




function validateInput2() {
  //check pseudo is empty
  if (pseudo2.value.trim() === "") {
    onError(pseudo2, "Please enter your pseudo");
  } else {
    onSuccess(pseudo2);
  }
  //check pasword is empty
  if (password2.value.trim() === "") {
    onError(password2, "Please enter your password");
  } else {
    onSuccess(password2);
  }
}



document.querySelector("#check")
.addEventListener("click",(event)=>{
    event.preventDefault();
    validateInput2();
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




function isValidEmail(email){
   return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isValidCode(e){
  var x= e.which || e.keycode;
  if((x >= 48 && x<= 57))
    return true;
  else
    return false;  
}




const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}








