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
  const faqItems = document.querySelectorAll(".faq-item");
  if (faqItems.length) {
    faqItems[0]?.classList.add("active");
    faqItems.forEach((item) => {
      const button = item.querySelector(".faq-btn");
      if (button) {
        button.addEventListener("click", () => {
          const isActive = item.classList.contains("active");
          faqItems.forEach((faq) => {
            faq.classList.remove("active");
          });
          if (!isActive) {
            item.classList.add("active");
          }
        });
      }
    });
  }
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
  /*
|--------------------------------------------------------------------------
| HISTORY TIMELINE
|--------------------------------------------------------------------------
*/
  const historyButtons = document.querySelectorAll(".history-year");
  if (historyButtons.length) {
    const historyData = {
      1982: {
        title: "Foundation Of CIWEC",
        image: "./assets/img/history/history1.webp",
        description:
          "CIWEC Hospital was established in 1982 with a vision to provide international-standard healthcare services in Nepal. Initially serving diplomats, expatriates, aid workers, and travelers, the institution quickly earned a reputation for delivering high-quality medical care through experienced professionals, advanced diagnostics, and a patient-centered approach.",
      },
      2000: {
        title: "Service Expansion",
        image: "./assets/img/history/history2.webp",
        description:
          "As healthcare needs continued to evolve, CIWEC expanded its range of medical services and specialties. New departments, enhanced outpatient care, and comprehensive preventive health programs were introduced, enabling the hospital to serve a broader community while maintaining its commitment to international healthcare standards.",
      },
      2005: {
        title: "Modern Medical Facilities",
        image: "./assets/img/history/history3.webp",
        description:
          "CIWEC invested significantly in modern medical technology and infrastructure, introducing advanced diagnostic equipment, improved laboratory services, and upgraded clinical facilities. These developments strengthened the hospital's ability to provide accurate diagnoses, efficient treatments, and a higher standard of patient care.",
      },
      2014: {
        title: "CIWEC Pokhara Opened",
        image: "./assets/img/history/history1.webp",
        description:
          "Expanding beyond Kathmandu, CIWEC established its Pokhara facility in 2014 to provide trusted healthcare services to residents, travelers, trekkers, and international visitors in western Nepal.",
      },
      2020: {
        title: "Enhanced Global Care",
        image: "./assets/img/history/history2.webp",
        description:
          "During a period of global healthcare challenges, CIWEC strengthened its international patient support services and emergency response capabilities.",
      },
      2025: {
        title: "Future Ready Healthcare",
        image: "./assets/img/history/history3.webp",
        description:
          "Building on decades of excellence, CIWEC continues to embrace innovation, digital transformation, and patient-focused healthcare solutions.",
      },
    };
    historyButtons.forEach((button) => {
      button.addEventListener("click", () => {
        historyButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
        const year = button.dataset.year;
        const data = historyData[year];
        if (!data) return;
        document.getElementById("historyYear").textContent = year;
        document.getElementById("historyTitle").textContent = data.title;
        document.getElementById("historyDescription").textContent =
          data.description;
        document.getElementById("historyImage").src = data.image;
      });
    });
  }
  /*
|--------------------------------------------------------------------------
| PUBLICATION SYSTEM
|--------------------------------------------------------------------------
*/
//   const publicationTable = document.getElementById("publicationTable");
//   if (publicationTable) {
//     const publicationData = {
//       newsletter: [
//         {
//           id: 1,
//           title: "Newsletter July 2025",
//           file: "./assets/pdf/news1.pdf",
//         },
//         {
//           id: 2,
//           title: "March – April Newsletter",
//           file: "./assets/pdf/news2.pdf",
//         },
//       ],
//       "health-information": [
//         {
//           id: 1,
//           title: "Health Information July 2025",
//           file: "./assets/pdf/news1.pdf",
//           detailsUrl: "./health-information-detail.php?id=1",
//         },
//       ],
//       research: [
//         {
//           id: 1,
//           title: "Research Publication 2025",
//           file: "./assets/pdf/news1.pdf",
//           detailsUrl: "./research-detail.php?id=1",
//         },
//       ],
//     };
//     const publications = publicationData[currentType] ?? [];
//     const pagination = document.getElementById("publicationPagination");
//     const loader = document.getElementById("publicationLoader");
//     const content = document.getElementById("publicationContent");
//     const searchInput = document.getElementById("searchInput");
//     const perPageSelect = document.getElementById("perPage");
//     let currentPage = 1;
//     let perPage = 5;
//     let search = "";
//     function showLoader() {
//       if (loader) loader.classList.remove("hidden");
//       if (content) {
//         content.style.opacity = ".3";
//         content.style.pointerEvents = "none";
//       }
//     }
//     function hideLoader() {
//       if (loader) loader.classList.add("hidden");
//       if (content) {
//         content.style.opacity = "1";
//         content.style.pointerEvents = "auto";
//       }
//     }
//     function getActionButtons(item) {
//       if (actionType === "download") {
//         return `
// <a href="${item.file}"
//    download
//    class="inline-flex items-center gap-2 text-primary font-semibold">
// <i class="fa-solid fa-file-pdf text-secondary"></i>
// Download
// </a>
// `;
//       }
//       return `
// <a href="${item.file}"
//    target="_blank"
//    rel="noopener noreferrer"
//    class="inline-flex items-center gap-2 text-secondary font-semibold">
// <i class="fa-solid fa-file-pdf"></i>
// Read More
// </a>
// `;
//     }
//     function renderTable(data) {
//       publicationTable.innerHTML = "";
//       if (!data.length) {
//         publicationTable.innerHTML = `
// <tr>
//    <td colspan="3"
//       class="px-5 py-8 text-center text-slate-500">
//       No records found
//    </td>
// </tr>
// `;
//         return;
//       }
//       data.forEach((item, index) => {
//         publicationTable.innerHTML += `
// <tr class="border-b border-slate-200 hover:bg-slate-100 transition">
//    <td class="px-5 py-4 font-semibold text-primary">
//       ${(currentPage - 1) * perPage + index + 1}
//    </td>
//    <td class="px-5 py-4 text-slate-700">
//       ${item.title}
//    </td>
//    <td class="px-5 py-4 text-center">
//       ${getActionButtons(item)}
//    </td>
// </tr>
// `;
//       });
//     }
//     function renderPagination(totalPages) {
//       if (!pagination) return;
//       pagination.innerHTML = "";
//       if (totalPages <= 1) return;
//       for (let i = 1; i <= totalPages; i++) {
//         pagination.innerHTML += `
// <button
// onclick="changePage(${i})"
// class="${currentPage === i ? "bg-primary text-white" : "bg-white text-primary"}">
// ${i}
// </button>
// `;
//       }
//     }
//     function fetchPublications() {
//       showLoader();
//       setTimeout(() => {
//         const filtered = publications.filter((item) =>
//           item.title.toLowerCase().includes(search.toLowerCase()),
//         );
//         const totalPages = Math.ceil(filtered.length / perPage);
//         const start = (currentPage - 1) * perPage;
//         const data = filtered.slice(start, start + perPage);
//         renderTable(data);
//         renderPagination(totalPages);
//         hideLoader();
//       }, 500);
//     }
//     window.changePage = function (page) {
//       currentPage = page;
//       fetchPublications();
//     };
//     if (perPageSelect) {
//       perPageSelect.addEventListener("change", (e) => {
//         perPage = parseInt(e.target.value);
//         currentPage = 1;
//         fetchPublications();
//       });
//     }
//     if (searchInput) {
//       let typingTimer;
//       searchInput.addEventListener("keyup", (e) => {
//         clearTimeout(typingTimer);
//         typingTimer = setTimeout(() => {
//           search = e.target.value;
//           currentPage = 1;
//           fetchPublications();
//         }, 500);
//       });
//     }
//     fetchPublications();
//   }
});
