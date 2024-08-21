window.onscroll = function() {
    const header = document.querySelector('navbar');
    const fixedNav = header.offsetTop;
    const toTop= document.querySelector("#to-top");

    if (window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
        toTop.classList.remove('hidden','fade-out');
        toTop.classList.add('flex','fade-in');
    } else {
        header.classList.remove('navbar-fixed');
        toTop.classList.add('fade-out','hidden');
        toTop.classList.remove('flex');
    }
}

// Popup PPDB
const ppdbs = document.querySelector('#ppdbbtn');
const infoppdb = document.querySelector('#info-ppdb');

ppdbs.addEventListener('click', function() {
    ppdbs.classList.toggle('ppdbs-active');
    infoppdb.classList.toggle('hidden');
});


// Klik diluar Hamburger
window.addEventListener('click', function(e) {
    if(e.target != ppdbs && e.target != infoppdb) {
      ppdbs.classList.remove('ppdbs-active');
      infoppdb.classList.add('hidden');
    }
});
  