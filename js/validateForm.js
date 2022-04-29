const submitButton = document.querySelector("#submit");
//obtener los campos del formulario
const age = document.querySelector("#age");
const petName = document.querySelector("#name");

submitButton.addEventListener("click", e=>{
  if( petName.value.length<=0 || age.value.length<=0 || isNaN(parseInt(age.value))){
    alert("Rellena correctamente el formulario antes de enviarlo");
    e.preventDefault();
  }
})