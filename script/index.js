try {
  gsap.to(".parralax-box", {
    y: -300,
    scrollTrigger: {
      trigger: ".section-par",
      end: "bottom bottom",
      start: "top bottom",
      scrub: 0.5,
      // markers: true,
    },
  });
} catch (error) {}

try {
  const hamburgerButton = document.querySelector(".button-navbar");
  const navbarOverlay = document.querySelector(".navbar-overlay");
  const closeButton = document.querySelector(".close-button");
  const navbarLinks = document.querySelectorAll(".navbar-link");
  const contactButton = document.querySelector(".contact-button");

  hamburgerButton.addEventListener("click", () => {
    navbarOverlay.classList.toggle("active");
    document.querySelector("html").style.overflow = "hidden";
  });

  closeButton.addEventListener("click", () => {
    navbarOverlay.classList.toggle("active");
    document.querySelector("html").style.overflow = "auto";
  });

  navbarLinks.forEach((link) => {
    link.addEventListener("click", () => {
      navbarOverlay.classList.toggle("active");
      document.querySelector("html").style.overflow = "auto";
    });
  });

  contactButton.addEventListener("click", () => {
    navbarOverlay.classList.toggle("active");
    document.querySelector("html").style.overflow = "auto";
  });
} catch (error) {}

try {
  const swiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: false,
    spaceBetween: 15,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        spaceBetween: 15,
        slidesPerView: 1.4,
      },
      768: {
        spaceBetween: 15,
        slidesPerView: 3.4,
      },
      1280: {
        spaceBetween: 20,
        slidesPerView: 4,
      },
    },
  });
} catch (error) {}

try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    slidesPerView: "auto",
    centeredSlides: true,
    initialSlide: 2,
    loop: true,
    grid: {
      rows: 1,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
} catch (error) {}

try {
  var swiper = new Swiper(".mySwiper-media", {
    spaceBetween: 20,
    slidesPerView: "auto",
    centeredSlides: true,
    grabCursor: true,
    initialSlide: 2,
    preventClicks: true,
    loop: true,
    grid: {
      rows: 1,
    },
    navigation: {
      nextEl: ".swiper-button-next-media",
      prevEl: ".swiper-button-prev-media",
    },
    breakpoints: {
      0: {
        spaceBetween: 25,
        slidesPerView: 1.4,
      },
      768: {
        spaceBetween: 30,
        slidesPerView: 2,
        centeredSlides: true,
      },
      1280: {
        spaceBetween: 30,
        slidesPerView: 2.6,
      },
    },
  });
} catch (error) {}

try {
  // Get reference to the Lottie animation element
  const elementLottie = document.querySelector("#lottie-francien");

  // Initialize the Lottie animation
  const animation = lottie.loadAnimation({
    container: elementLottie, // The DOM element that will contain the animation
    renderer: "svg",
    loop: false, // Don't loop the animation
    autoplay: false, // Don't start the animation immediately
    path: "/wp-content/themes/day-six/img/lottie/francien.json", // The path to the animation json
  });

  // Make sure the animation's progress is at 0
  animation.goToAndStop(0, true);

  const options = {
    rootMargin: "-30% 0% -30% 0%",
    threshold: 0,
  };

  // Setup Intersection Observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // Start animation when element comes into view
      if (entry.isIntersecting) {
        animation.play();
      }
    });
  }, options);

  // Observe the Lottie element
  observer.observe(elementLottie);
} catch (error) {}

// try {
//   var html = document.documentElement;
//   var body = document.body;

//   var scroller = {
//     target: document.querySelector("#scroll-container"),
//     ease: 0.06, // <= scroll speed
//     endY: 0,
//     y: 0,
//     resizeRequest: 1,
//     scrollRequest: 0,
//   };

//   var requestId = null;

//   TweenLite.set(scroller.target, {
//     rotation: 0.01,
//     force3D: true,
//   });

//   window.addEventListener("load", onLoad);

//   function onLoad() {
//     updateScroller();
//     window.focus();
//     window.addEventListener("resize", onResize);
//     document.addEventListener("scroll", onScroll);
//   }

//   function updateHeight() {
//     const height = scroller.target.clientHeight;
//     body.style.height = height + "px";
//   }

//   function updateScroller() {
//     const resized = scroller.resizeRequest > 0;

//     if (resized) {
//       const height = scroller.target.clientHeight;
//       body.style.height = height + "px";
//       scroller.resizeRequest = 0;
//     }

//     const scrollY = window.scrollY || html.scrollTop || body.scrollTop || 0;

//     scroller.endY = scrollY;
//     scroller.y += (scrollY - scroller.y) * scroller.ease;

//     if (Math.abs(scrollY - scroller.y) < 0.05 || resized) {
//       scroller.y = scrollY;
//       scroller.scrollRequest = 0;
//     }

//     TweenLite.set(scroller.target, {
//       y: -scroller.y,
//     });

//     requestId =
//       scroller.scrollRequest > 0 ? requestAnimationFrame(updateScroller) : null;
//   }

//   function onScroll() {
//     scroller.scrollRequest++;
//     if (!requestId) {
//       requestId = requestAnimationFrame(updateScroller);
//     }
//   }

//   function onResize() {
//     scroller.resizeRequest++;
//     if (!requestId) {
//       requestId = requestAnimationFrame(updateScroller);
//     }
//   }

//   document.addEventListener("click", function (e) {
//     setTimeout(function () {
//       updateHeight();
//     }, 500);

//     scroller.scrollRequest++;
//     if (!requestId) {
//       requestId = requestAnimationFrame(updateScroller);
//     }
//   });
// } catch (error) {}

try {
  addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll("[data-modal-id]");
    const modals = document.querySelectorAll(".modals");
    const closeModalsButton = document.querySelectorAll(".close-modals");
    const html = document.querySelector("html");
    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const modalId = button.dataset.modalId;
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");

        html.style.overflow = "hidden";
      });
    });

    closeModalsButton.forEach((element) => {
      element.addEventListener("click", () => {
        modals.forEach((button) => {
          button.classList.add("hidden");
          html.style.overflow = "auto";
        });
      });
    });
  });
} catch (error) {}

try {
  // Function to update the --vh custom property
  const updateVh = () => {
    // Get the viewport height
    let vh = window.innerHeight * 0.01;
    // Set the value of --vh to the root of the document
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  };

  // Call the function on page load
  updateVh();

  // Listen for the resize and scroll events
  window.addEventListener("resize", updateVh);
  window.addEventListener("scroll", updateVh);
} catch (error) {}
