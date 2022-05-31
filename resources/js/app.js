require("./bootstrap");

const addPosologieField = document.querySelector("#addPosologieField");
const delPosologieField = document.querySelector("#delPosologieField");
// create addeventlistener
addPosologieField.addEventListener("click", () => {
  console.log("hi");

  // create parent div
  const divParent = document.createElement("div");
  divParent.classList.add("w-full", "flex", "flex-wrap", "mx-4", "my-6");

  // Dosage
  // Create div for dosage field
  const divDosage = document.createElement("div");
  divDosage.classList.add("mr-10");

  // Create label for dosage field
  const labelDosage = document.createElement("label");
  labelDosage.classList.add("mr-2");
  labelDosage.setAttribute("for", "dosage");
  labelDosage.innerHTML = "Dosage:";

  // create input
  const inputDosage = document.createElement("input");
  inputDosage.setAttribute("type", "number");
  inputDosage.setAttribute("name", "dosage");
  inputDosage.setAttribute("placeholder", "1");
  inputDosage.setAttribute("required", "required");

  // append label and input to divDosage
  divDosage.appendChild(labelDosage);
  divDosage.appendChild(inputDosage);

  // create label for posologie field
  const labelPosologie = document.createElement("label");
  labelPosologie.classList.add("flex", "items-center", "mr-2");
  labelPosologie.setAttribute("for", "posologie");
  labelPosologie.innerHTML = "Heure:";

  // create input for posologie field
  const inputPosologie = document.createElement("input");
  inputPosologie.classList.add();
  inputPosologie.setAttribute("type", "time");
  inputPosologie.setAttribute("name", "posologie");
  inputPosologie.setAttribute("placeholder", "00:00");
  inputPosologie.setAttribute("min", "00:00");
  inputPosologie.setAttribute("max", "23:59");
  inputPosologie.setAttribute("required", "required");

  // Bin icon
  // Create div for bin icon
  const divBin = document.createElement("div");
  divBin.setAttribute("id", "delPosologieField");
  divBin.classList.add("flex", "items-center", "ml-6", "cursor-pointer");

  // create image for bin icon
  const imgBin = document.createElement("img");
  imgBin.setAttribute("height", "38");
  imgBin.setAttribute("width", "38");
  imgBin.setAttribute(
    "src",
    "http://localhost:8000/storage/asset/image/icon/bin.svg"
  );
  imgBin.setAttribute("alt", "bin Icon");

  // append image to divBin
  divBin.appendChild(imgBin);

  // append input and button to div
  divParent.appendChild(divDosage);
  divParent.appendChild(labelPosologie);
  divParent.appendChild(inputPosologie);
  divParent.appendChild(divBin);

  // append divParent to div
  document.querySelector("#posologieContainer").appendChild(divParent);
});

// On ne peut pas supprimer des éléments nouvellements crées, il faudrait utiliser un array, et faire les updates du Dom en fonction de l'array, voir l'exo de Phael
delPosologieField.addEventListener("click", (el) => {
  console.log(el.target.parentNode.parentNode);
  const toDel = el.target.parentNode.parentNode;
  const posologieContainer = document.querySelector("#posologieContainer");
  // el.remove();
  posologieContainer.removeChild(toDel);
});
