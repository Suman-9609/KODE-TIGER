

const main__head = document.querySelector('.main__head');
const contact__form = document.querySelector('.contact__form');
// const showContactForm = document.getElementById("showContactForm");


$('#showContactForm').click(() => {
  main__head.classList.toggle('decreaseWidth');
  contact__form.classList.toggle('showForm');
})


