// window.addEventListener('scroll', () => {
//     const scrolled = window.scrollY
//     console.log(scrolled)
//     if (scrolled > 605) {
//         document.getElementById("home1").style.color = 'black';
//     }
//     else if (scrolled < 605) {
//         document.getElementById("home1").style.color = rgb(232, 223, 225);
//     }
// });

let sections = document.querySelectorAll('li');
let navLinks = document.querySelectorAll('body div nav div div ul li a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.screenY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('body div nav div div ul li a[href*=' + id + ']').classList.add('active');
            });
        };
        
    });
};