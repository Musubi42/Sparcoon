require("./bootstrap");

const addPosologieField = document.querySelector("#addPosologieField");

// create addeventlistener
addPosologieField.addEventListener("click", () => {
  console.log("hi");

  // create parent div
  const divParent = document.createElement("div");
  divParent.classList.add(
    "w-full",
    "flex",
    "flex-wrap",
    "justify-center",
    "mx-4",
    "my-6"
  );

  // Dosage
  // Create div for dosage field
  const divDosage = document.createElement("div");
  divDosage.classList.add("mr-10");

  // Create label for dosage field
  const labelDosage = document.createElement("label");
  labelDosage.classList.add("mr-2");
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
  labelPosologie.innerHTML = "Posologie:";

  // create input for posologie field
  const inputPosologie = document.createElement("input");
  inputPosologie.classList.add();
  inputPosologie.setAttribute("type", "time");
  inputPosologie.setAttribute("name", "posologie");
  inputPosologie.setAttribute("placeholder", "00:00");
  inputPosologie.setAttribute("min", "00:00");
  inputPosologie.setAttribute("max", "23:59");
  inputPosologie.setAttribute("required", "required");

  // append input and button to div
  divParent.appendChild(divDosage);
  divParent.appendChild(labelPosologie);
  divParent.appendChild(inputPosologie);

  // append divParent to div
  document.querySelector("#posologie-container").appendChild(divParent);
});
