const modal = document.getElementById("moreInfoGeneral");
const modalHoreca = document.getElementById("moreInfoHoreca");

const showModal = () => {
    modal.style.display = "block";
    modal.scrollIntoView();
}

const hideModal = () => {
    modal.style.display = "none";
}


const showModalHoreca = () => {
    modalHoreca.style.display = "block";
    modalHoreca.scrollIntoView();
}

const hideModalHoreca = () => {
    modalHoreca.style.display = "none";
}