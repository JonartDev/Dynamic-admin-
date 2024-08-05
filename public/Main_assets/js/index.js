var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    autoplay: {
      delay: 3000,
    },
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 1,
        },
    },
  });

  // MODAL
  
// Get the modals
var modal = document.getElementById("customModal");
var link = document.getElementById("openModalLink");
var span = document.getElementById("closeModalBtn");

var modal2 = document.getElementById("customModal2");
var link2 = document.getElementById("openModalLink2");
var span2 = document.getElementById("closeModalBtn2");

var span3 = document.getElementById("closeModalBtn3");

function showModal(modal) {
  modal.style.display = "flex";
}

function hideModal(modal) {
  modal.style.display = "none";
}


link.onclick = function(event) {
  event.preventDefault(); 
  showModal(modal);
}

span.onclick = function() {
  hideModal(modal);
}

window.onclick = function(event) {
  if (event.target == modal) {
    hideModal(modal);
  }
}


link2.onclick = function(event) {
  event.preventDefault(); 
  showModal(modal2);
}

span2.onclick = function() {
  hideModal(modal2);
}

window.onclick = function(event) {
  if (event.target == modal2) {
    hideModal(modal2);
  }
}

span3.onclick = function() {
  hideModal(modal2);
}




function generateRandomMsText() {
    return Math.floor(Math.random() * 50) + 1 + 'ms';
}

function updateMsText() {
    const msTextElements = document.querySelectorAll('.ms-text');
    msTextElements.forEach(element => {
        element.textContent = generateRandomMsText();
    });
}

setInterval(updateMsText, 4000);


// RANDOM
document.addEventListener('DOMContentLoaded', function() {
  const itemsPerPage = 6;
  let currentPage = 1;

  function displayItems(page) {
    const container = document.getElementById('linksContainer');
    const allItems = Array.from(container.getElementsByClassName('link-item'));
    const viewMoreBtn = document.getElementById('viewMoreBtn');

      allItems.forEach(item => item.style.display = 'none');

      const startIndex = (page - 1) * itemsPerPage;
      const endIndex = Math.min(startIndex + itemsPerPage, allItems.length);

      
      for (let i = startIndex; i < endIndex; i++) {
          allItems[i].style.display = 'flex';
      }

    
      if (endIndex >= allItems.length) {
        // viewMoreBtn.style.display = 'none';
      } else {
        viewMoreBtn.style.display = 'flex';
      }
  }

  document.getElementById('viewMoreBtn').addEventListener('click', function() {
      const allItems = document.querySelectorAll('.link-item');
      const totalItems = allItems.length;

      if ((currentPage * itemsPerPage) < totalItems) {
          currentPage++;
      } else {
          currentPage = 1; 
      }
      displayItems(currentPage);
  });

  displayItems(currentPage);
});


// ANDROID AND IOS
function getMobileOperatingSystem() {
  const userAgent = navigator.userAgent || navigator.vendor || window.opera;

  if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return 'iOS';
  }

  if (/android/i.test(userAgent)) {
      return 'Android';
  }
}

const os = getMobileOperatingSystem();

if (os === 'iOS') {
  document.getElementById('android').style.display = 'none';
  document.getElementById('ios').style.display = 'flex';
} else if (os === 'Android') {
  document.getElementById('ios').style.display = 'none';
  document.getElementById('android').style.display = 'flex';
} else {
  document.getElementById('ios').style.display = 'none';
  document.getElementById('android').style.display = 'flex';
}


