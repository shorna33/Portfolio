
// Navlink color change based on background
let hom = document.querySelector('.hom');
let h = document.querySelectorAll('div nav div div ul li a');

window.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    let height_home = hom.offsetHeight - 40;

    
    if (scrolled >= height_home) {
        h.forEach(link => {
            link.style.color = '#415880';
        });
    }
    else if (scrolled < height_home) {
        h.forEach(link => {
            link.style.color = '#cacdcf';
        });
    }
});


// Navlink active code
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('div nav div div ul li a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        let height_hom = hom.offsetHeight - 40;
        

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                if (top >= height_hom) {
                    links.setAttribute('style', 'color: #415880 !important; font-weight: 600 !important;');
                }
                let activeDiv = document.querySelector('div nav div div ul li a[href*=' + id + ']');
                activeDiv.classList.add('active');
                if (top >= height_hom && activeDiv.classList.contains('active')) {
                    links.setAttribute('style', 'color: #36507d !important;');
                    links.style.fontWeight = "700";
                }
                // else if (top < height_hom && activeDiv.classList.contains('active')) {
                //     activeDiv.setAttribute('style', 'color: white !important;');
                //     activeDiv.style.fontWeight = "700";
                // }
            });
        };
        
        
    });
};


// Scroll up button
let calcScrollValue = () => {
    let scrollProgress = document.getElementById('progress');
    let progressValue = document.getElementById('progress-value');
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
        scrollProgress.style.display = 'grid';
    } else {
        scrollProgress.style.display = 'none';
    }
    scrollProgress.addEventListener('click', () => {
        document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#36507d ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;


