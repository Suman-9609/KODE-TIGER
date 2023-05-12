const activePage = window.location.pathname;
console.log(activePage);


if (activePage === '/KODE-TIGER/about.php') {
    const icon1 = document.getElementById('sideIcon1');
    const icon2 = document.getElementById('sideIcon2');
    const icon3 = document.getElementById('sideIcon3');
    const icon4 = document.getElementById('sideIcon4');
    icon1.classList.remove('fa-regular');
    icon2.classList.remove('fa-solid');
    icon3.classList.remove('fa-solid');
    icon4.classList.remove('fa-solid');
    icon1.classList.add('fa-solid');
    icon2.classList.add('fa-regular');
    icon3.classList.add('fa-regular');
    icon4.classList.add('fa-regular');
}

if (activePage === '/KODE-TIGER/service.php') {
    const icon1 = document.getElementById('sideIcon1');
    const icon2 = document.getElementById('sideIcon2');
    const icon3 = document.getElementById('sideIcon3');
    const icon4 = document.getElementById('sideIcon4');
    icon1.classList.remove('fa-solid');
    icon2.classList.remove('fa-regular');
    icon3.classList.remove('fa-solid');
    icon4.classList.remove('fa-solid');
    icon1.classList.add('fa-regular');
    icon2.classList.add('fa-solid');
    icon3.classList.add('fa-regular');
    icon4.classList.add('fa-regular');
}

if (activePage === '/KODE-TIGER/project.php') {
    const icon1 = document.getElementById('sideIcon1');
    const icon2 = document.getElementById('sideIcon2');
    const icon3 = document.getElementById('sideIcon3');
    const icon4 = document.getElementById('sideIcon4');
    icon1.classList.remove('fa-solid');
    icon2.classList.remove('fa-solid');
    icon3.classList.remove('fa-regular');
    icon4.classList.remove('fa-solid');
    icon1.classList.add('fa-regular');
    icon2.classList.add('fa-regular');
    icon3.classList.add('fa-solid');
    icon4.classList.add('fa-regular');
}


if (activePage === '/KODE-TIGER/contact.php') {
    const icon1 = document.getElementById('sideIcon1');
    const icon2 = document.getElementById('sideIcon2');
    const icon3 = document.getElementById('sideIcon3');
    const icon4 = document.getElementById('sideIcon4');
    icon1.classList.remove('fa-solid');
    icon2.classList.remove('fa-solid');
    icon3.classList.remove('fa-solid');
    icon4.classList.remove('fa-regular');
    icon1.classList.add('fa-regular');
    icon2.classList.add('fa-regular');
    icon3.classList.add('fa-regular');
    icon4.classList.add('fa-solid');
}

