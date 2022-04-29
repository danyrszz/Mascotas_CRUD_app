"use strict";
const petContainer = document.querySelector(".pets-container");
console.log(petContainer)

async function getData(){
  try {
    const response = await fetch (
      "./php/retrievePets.php"
    );
    return response.json();
  } catch (error) {
    console.log(error)
  }
}

async function renderPets(){
  const data = await getData();
  let htmlContent = "";

  data.forEach(pet => {
    htmlContent += `
    <div class="pets-container--row">
      <div class="delete"> 
      <a href="index.php?page=delete&id=${pet.id_mascota}">X</a> 
      </div>
      <div class="pet-name">${pet.nombre}</div>
      <div class="pet-age">Edad: ${pet.edad}</div>
      <div class="pet-type">${pet.tipo}</div>
      <div class="pet-disease">Enfermedades: ${pet.enfermedades}</div>
    </div>
    `;
  });
  petContainer.innerHTML = htmlContent;
  console.log(data);
}

renderPets();