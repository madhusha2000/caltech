document.addEventListener('DOMContentLoaded', function () {
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    // Check if menu and navbar elements exist before attaching the event handler
    if (menu && navbar) {
        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        };
    }

    // Check if menu exists before removing classes on scroll
    window.onscroll = () => {
        if (menu) {
            menu.classList.remove('fa-times');
        }
        if (navbar) {
            navbar.classList.remove('active');
        }
    };

    // Initialize Swiper inside the DOMContentLoaded event
    var swiper = new Swiper(".home-slider", {
        loop: true,
        spaceBetween: 20, // Set the desired space between slides
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


var swiper = new Swiper(".team-slider", {
    loop: true,
    spaceBetween: 20, // Set the desired space between slides
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        450: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
          
        },
        1000: {
          slidesPerView: 3,
          
        },
      },
});

const counts = document.querySelectorAll('.count');
const speed = 97;

counts.forEach((counter) => {
    function upData() {
        const target = Number(counter.getAttribute('data-target'));
        const count = Number(counter.innerText);
        const inc = (target - count) / speed;
        
        if (count < target) {
            counter.innerText = Math.ceil(inc + count); // Round to the nearest integer
            setTimeout(upData, 1);
        } else {
            counter.innerText = target;
        }
    }

    upData();
});


});

document.addEventListener("DOMContentLoaded", function () {
    var userFeed = new Instafeed({
        get: 'user',
        target: "instafeed-container",
        resolution: 'low_resolution',
        accessToken: 'IGQWROT2M0UjFtdTE0NXNmaG42TlFQYmlrZAUtxUi1KZAWV5eFpwUnRSUHBSeDZA4OFN0NnotNzlCaHVqZAmpEQWlJaFhYWnRBMURPRnYtLTdRZAFdQUU16bGt6ek5veU1iM3I1eExDTG93MUNKRGg1TDdWSnZAPVWV5dUUZD',//token
        limit: 8
    });

    userFeed.run();

    var loadMoreBtn = document.getElementById('show-more-btn');
    
    loadMoreBtn.addEventListener('click', function () {
     
        window.open('https://www.instagram.com/caltechau/', '_blank');
    });
});
