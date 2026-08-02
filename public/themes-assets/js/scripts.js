document.addEventListener("DOMContentLoaded", () => {
  /*
|--------------------------------------------------------------------------
| CIWEC Model Auto Switch
|--------------------------------------------------------------------------
*/
  /*
|--------------------------------------------------------------------------
| CIWEC Model Auto Active System
|--------------------------------------------------------------------------
*/
  const modelItems = document.querySelectorAll(".model-item");
  const centerImage = document.getElementById("centerImage");
  if (modelItems.length && centerImage) {
    let activeIndex = 0;
    let interval;
    const duration = 4000;
    function changeModel(index) {
      modelItems.forEach((item) => {
        item.classList.remove("active");
      });
      const activeItem = modelItems[index];
      if (!activeItem) return;
      activeItem.classList.add("active");
      const newImage = activeItem.dataset.image;
      if (centerImage.src.includes(newImage)) {
        return;
      }
      centerImage.classList.add("changing");
      setTimeout(() => {
        centerImage.src = newImage;
        centerImage.onload = () => {
          centerImage.classList.remove("changing");
        };
      }, 250);
    }
    function startAutoPlay() {
      interval = setInterval(() => {
        activeIndex++;
        if (activeIndex >= modelItems.length) {
          activeIndex = 0;
        }
        changeModel(activeIndex);
      }, duration);
    }
    function stopAutoPlay() {
      clearInterval(interval);
    }
    // initial
    changeModel(activeIndex);
    startAutoPlay();
    // click support
    modelItems.forEach((item, index) => {
      item.addEventListener("click", () => {
        activeIndex = index;
        changeModel(activeIndex);
        stopAutoPlay();
        startAutoPlay();
      });
    });
    // Better UX
    modelItems.forEach((item) => {
      item.addEventListener("mouseenter", () => {
        stopAutoPlay();
      });
      item.addEventListener("mouseleave", () => {
        startAutoPlay();
      });
    });
  }
  /*
|--------------------------------------------------------------------------
| Why Cards Animation
|--------------------------------------------------------------------------
*/
  //   const whyCards = document.querySelectorAll(".why-card");
  //   if (whyCards.length) {
  //     const whyObserver = new IntersectionObserver(
  //       (entries) => {
  //         entries.forEach((entry, index) => {
  //           if (entry.isIntersecting) {
  //             setTimeout(() => {
  //               entry.target.classList.add("animate-show");
  //             }, index * 150);
  //           }
  //         });
  //       },
  //       {
  //         threshold: 0.2,
  //       },
  //     );
  //     whyCards.forEach((card) => whyObserver.observe(card));
  //   }
  /*
|--------------------------------------------------------------------------
| Award Slider
|--------------------------------------------------------------------------
*/
  if (document.querySelector(".awardSwiper")) {
    new Swiper(".awardSwiper", {
      loop: true,
      speed: 1000,
      spaceBetween: 24,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: ".award-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1280: {
          slidesPerView: 3,
        },
      },
    });
  }
  /*
|--------------------------------------------------------------------------
| Back To Top + WhatsApp
|--------------------------------------------------------------------------
*/
  const backToTop = document.getElementById("backToTop");
  const whatsappBtn = document.getElementById("whatsappBtn");
  if (backToTop) {
    backToTop.onclick = () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    };
    window.addEventListener("scroll", () => {
      if (window.scrollY > 250) {
        backToTop.classList.remove(
          "opacity-0",
          "pointer-events-none",
          "translate-y-8",
        );
        backToTop.classList.add("opacity-100", "translate-y-0");
        if (whatsappBtn) {
          whatsappBtn.classList.add("-translate-y-20");
        }
      } else {
        backToTop.classList.add(
          "opacity-0",
          "pointer-events-none",
          "translate-y-8",
        );
        backToTop.classList.remove("opacity-100", "translate-y-0");
        if (whatsappBtn) {
          whatsappBtn.classList.remove("-translate-y-20");
        }
      }
    });
  }
  /*
|--------------------------------------------------------------------------
| Scroll Progress
|--------------------------------------------------------------------------
*/
  const progressCircle = document.getElementById("scrollProgress");
  if (progressCircle) {
    window.addEventListener("scroll", () => {
      const scrollTop = window.scrollY;
      const docHeight =
        document.documentElement.scrollHeight - window.innerHeight;
      const progress = scrollTop / docHeight;
      const circumference = 289;
      progressCircle.style.strokeDashoffset =
        circumference - progress * circumference;
    });
  }
  /*
|--------------------------------------------------------------------------
| Counter Animation
|--------------------------------------------------------------------------
*/
  const counters = document.querySelectorAll(".counter");
  if (counters.length) {
    const counterObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = entry.target;
            const target = +(counter.dataset.target || counter.dataset.count);
            let current = 0;
            const increment = target / 120;
            const updateCounter = () => {
              if (current < target) {
                current += increment;
                counter.innerText = Math.floor(current);
                requestAnimationFrame(updateCounter);
              } else {
                counter.innerText = target.toLocaleString() + "+";
              }
            };
            updateCounter();
            counterObserver.unobserve(counter);
          }
        });
      },
      {
        threshold: 0.4,
      },
    );
    counters.forEach((counter) => {
      counterObserver.observe(counter);
    });
  }
  /*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
*/
//  const faqItems = document.querySelectorAll(".faq-item");

// if (faqItems.length) {

//     // Open first FAQ by default
//     faqItems[0].classList.add("active");


//     faqItems.forEach((item) => {

//         const button = item.querySelector(".faq-btn");

//         if (button) {

//             button.addEventListener("click", () => {

//                 const isActive = item.classList.contains("active");


//                 // Close all FAQs
//                 faqItems.forEach((faq) => {
//                     faq.classList.remove("active");
//                 });


//                 // Open clicked FAQ if it was closed
//                 if (!isActive) {
//                     item.classList.add("active");
//                 }

//             });

//         }

//     });

// }
  /*
|--------------------------------------------------------------------------
| Patient Stories Slider
|--------------------------------------------------------------------------
*/
  if (document.querySelector(".patientStoriesSwiper")) {
    new Swiper(".patientStoriesSwiper", {
      loop: true,
      speed: 1000,
      spaceBetween: 20,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: ".patient-story-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
      },
    });
  }
  /*
|--------------------------------------------------------------------------
| Video Modal
|--------------------------------------------------------------------------
*/
  const videoModal = document.getElementById("videoModal");
  const storyVideo = document.getElementById("storyVideo");
  const closeVideoModal = document.getElementById("closeVideoModal");
  if (videoModal && storyVideo) {
    document.querySelectorAll(".story-card").forEach((card) => {
      card.addEventListener("click", () => {
        const video = card.dataset.video;
        storyVideo.src = video;
        videoModal.classList.remove("hidden");
        videoModal.classList.add("flex");
        storyVideo.play();
        document.body.style.overflow = "hidden";
      });
    });
    const closeModal = () => {
      videoModal.classList.add("hidden");
      videoModal.classList.remove("flex");
      storyVideo.pause();
      storyVideo.currentTime = 0;
      document.body.style.overflow = "auto";
    };
    closeVideoModal?.addEventListener("click", closeModal);
    videoModal.addEventListener("click", (e) => {
      if (e.target === videoModal) {
        closeModal();
      }
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        closeModal();
      }
    });
  }
  /*
|--------------------------------------------------------------------------
| Search
|--------------------------------------------------------------------------
*/
  const searchToggle = document.getElementById("searchToggle");
  const searchWrapper = document.getElementById("searchWrapper");
  const searchOverlay = document.getElementById("searchOverlay");
  if (searchToggle && searchWrapper && searchOverlay) {
    searchToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      searchWrapper.classList.toggle("search-active");
    });
    searchOverlay.addEventListener("click", () => {
      searchWrapper.classList.remove("search-active");
    });
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        searchWrapper.classList.remove("search-active");
      }
    });
  }
  /*
|--------------------------------------------------------------------------
| Speciality Slider
|--------------------------------------------------------------------------
*/
  if (document.querySelector(".specialitySwiper")) {
    new Swiper(".specialitySwiper", {
      loop: false,
      speed: 900,
      slidesPerView: 1.15,
      spaceBetween: 1,
      autoplay: true,
      pagination: {
        el: ".speciality-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2.1,
        },
        1024: {
          slidesPerView: 3.2,
        },
        1280: {
          slidesPerView: 4.5,
        },
      },
    });
  }
  /*
|--------------------------------------------------------------------------
| Mobile Sticky Bar
|--------------------------------------------------------------------------
*/
  const mobileBar = document.getElementById("mobileStickyBar");
  if (mobileBar) {
    let lastScrollMobile = window.scrollY;
    const showMobileBar = () => {
      mobileBar.classList.remove(
        "translate-y-full",
        "opacity-0",
        "pointer-events-none",
      );
      mobileBar.classList.add("translate-y-0", "opacity-100");
    };
    const hideMobileBar = () => {
      mobileBar.classList.add(
        "translate-y-full",
        "opacity-0",
        "pointer-events-none",
      );
      mobileBar.classList.remove("translate-y-0", "opacity-100");
    };
    showMobileBar();
    window.addEventListener("scroll", () => {
      const currentScroll = window.scrollY;
      const isAtBottom =
        window.innerHeight + currentScroll >=
        document.documentElement.scrollHeight - 5;
      if (currentScroll > lastScrollMobile) {
        hideMobileBar();
      }
      if (currentScroll < lastScrollMobile) {
        showMobileBar();
      }
      if (isAtBottom) {
        showMobileBar();
      }
      lastScrollMobile = currentScroll;
    });
  }
  /*
|--------------------------------------------------------------------------
| Header Shadow
|--------------------------------------------------------------------------
*/
  const header = document.getElementById("header");
  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 20) {
        header.classList.add("shadow-md");
      } else {
        header.classList.remove("shadow-md");
      }
    });
  }
  /*
|--------------------------------------------------------------------------
| Review Slider
|--------------------------------------------------------------------------
*/
  if (document.querySelector(".reviewSwiper")) {
    new Swiper(".reviewSwiper", {
      loop: true,
      speed: 1000,
      spaceBetween: 24,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1280: {
          slidesPerView: 3,
        },
      },
    });
  }

});
