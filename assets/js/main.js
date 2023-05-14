
const showContactForm = document.getElementById('showContactForm');
const contactForm = document.querySelector('.contact__form');
const main__head = document.querySelector('.main__head');
const tab1 = document.getElementById('tab1');
const tab2 = document.getElementById('tab2');
const tab3 = document.getElementById('tab3');
const tab__icon1 = document.getElementById('tab__icon1');
const tab__icon2 = document.getElementById('tab__icon2');
const tab__icon3 = document.getElementById('tab__icon3');
const service__card = document.querySelector('.service__card');
const service__card1 = document.querySelector('.service__card1');
const service__card2 = document.querySelector('.service__card2');
const service__card3 = document.querySelector('.service__card3');
const rightImage = document.getElementById('rightImage');


showContactForm.addEventListener('click', () => {
    console.log("show contact btn cliced...");
   contactForm.classList.toggle('showcontact');
   main__head.classList.toggle('dcreaseWidth');
   console.log(dcreaseWidth);
})

tab1.addEventListener('click', () => {
    // console.log('tab 1 clicked..');
    service__card.style.display = 'none';
    service__card2.style.display = 'none';
    service__card3.style.display = 'none';
    service__card1.style.display = 'block';
    rightImage.classList.remove('services_img');
    rightImage.classList.remove('service_img2');
    rightImage.classList.remove('service_img3');
    rightImage.classList.add('service_img1');
    tab__icon1.classList.remove('fa-regular');
    tab__icon2.classList.remove('fa-solid');
    tab__icon3.classList.remove('fa-solid');
    tab__icon1.classList.add('fa-solid');
    tab__icon2.classList.add('fa-regular');
    tab__icon3.classList.add('fa-regular');
});


tab2.addEventListener('click', () => {
    // console.log('tab 2 clicked..');
    service__card.style.display = 'none';
    service__card1.style.display = 'none';
    service__card3.style.display = 'none';
    service__card2.style.display = 'block';
    rightImage.classList.remove('services_img');
    rightImage.classList.remove('service_img1');
    rightImage.classList.remove('service_img3');
    rightImage.classList.add('service_img2');
    tab__icon2.classList.remove('fa-regular');
    tab__icon1.classList.remove('fa-solid');
    tab__icon3.classList.remove('fa-solid');
    tab__icon2.classList.add('fa-solid');
    tab__icon1.classList.add('fa-regular');
    tab__icon3.classList.add('fa-regular');
});

tab3.addEventListener('click', () => {
    // console.log('tab 3 clicked..');
    service__card.style.display = 'none';
    service__card1.style.display = 'none';
    service__card2.style.display = 'none';
    service__card3.style.display = 'block';
    rightImage.classList.remove('services_img');
    rightImage.classList.remove('service_img1');
    rightImage.classList.remove('service_img2');
    rightImage.classList.add('service_img3');
    tab__icon3.classList.remove('fa-regular')
    tab__icon1.classList.remove('fa-solid');
    tab__icon2.classList.remove('fa-solid');
    tab__icon3.classList.add('fa-solid');
    tab__icon1.classList.add('fa-regular');
    tab__icon2.classList.add('fa-regular');
    // console.log(tab__icon3);
});


// const activePage = window.location;
// console.log(activePage);
