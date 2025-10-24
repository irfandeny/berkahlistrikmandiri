$(document).ready(function () {
  // ===== HAMBURGER MENU =====
  const hamburger = $("#hamburger");
  const navMenu = $("#navMenu");

  hamburger.click(function () {
    navMenu.toggleClass("active");
    hamburger.toggleClass("active");
  });

  // Close menu when link clicked
  $(".nav-link").click(function () {
    navMenu.removeClass("active");
    hamburger.removeClass("active");
  });

  // ===== SMOOTH SCROLL & ACTIVE LINK =====
  $(window).scroll(function () {
    const scrollPos = $(window).scrollTop();

    $(".nav-link").each(function () {
      const sectionId = $(this).attr("href");
      if (sectionId.startsWith("#")) {
        const section = $(sectionId);
        if (section.length) {
          if (
            section.offset().top - 100 <= scrollPos &&
            section.offset().top + section.height() > scrollPos
          ) {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
          }
        }
      }
    });
  });

  // ===== ANIMATE ON SCROLL =====
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    offset: 100,
  });

  // ===== FORM VALIDATION & SUBMISSION =====
  const contactForm = $("#contactForm");

  if (contactForm.length) {
    contactForm.submit(function (e) {
      e.preventDefault();

      // Get form values
      const nama = $("#nama").val().trim();
      const email = $("#email").val().trim();
      const pesan = $("#pesan").val().trim();

      // Reset alert
      $(".alert").hide();

      // Validation
      if (nama === "" || email === "" || pesan === "") {
        showAlert("Semua field harus diisi!", "danger");
        return false;
      }

      if (!isValidEmail(email)) {
        showAlert("Format email tidak valid!", "danger");
        return false;
      }

      if (pesan.length < 10) {
        showAlert("Pesan minimal 10 karakter!", "danger");
        return false;
      }

      // Submit form with AJAX
      $.ajax({
        type: "POST",
        url: "process_contact.php",
        data: {
          nama: nama,
          email: email,
          pesan: pesan,
        },
        dataType: "json",
        success: function (response) {
          if (response.success) {
            showAlert(response.message, "success");
            contactForm[0].reset();
          } else {
            showAlert(response.message, "danger");
          }
        },
        error: function () {
          showAlert("Terjadi kesalahan saat mengirim pesan!", "danger");
        },
      });

      return false;
    });
  }

  // ===== EMAIL VALIDATION =====
  function isValidEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }

  // ===== SHOW ALERT =====
  function showAlert(message, type) {
    const alert = $(".alert");
    alert.removeClass("alert-success alert-danger").addClass("alert-" + type);
    alert.text(message).addClass("show");

    // Auto hide after 5 seconds
    setTimeout(function () {
      alert.removeClass("show");
    }, 5000);
  }

  // ===== BUTTON RIPPLE EFFECT =====
  $("body").on(
    "click",
    ".btn-primary, .btn-secondary, .service-card .btn-primary",
    function (e) {
      const ripple = $('<span class="ripple"></span>');
      const offsetX = e.offsetX;
      const offsetY = e.offsetY;

      ripple.css({
        left: offsetX + "px",
        top: offsetY + "px",
      });

      $(this).append(ripple);

      setTimeout(function () {
        ripple.remove();
      }, 600);
    }
  );

  // ===== COUNTER ANIMATION =====
  function animateCounter(element, target, duration = 2000) {
    const increment = target / (duration / 16);
    let current = 0;

    const timer = setInterval(function () {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      element.text(Math.floor(current));
    }, 16);
  }

  // Trigger counter on scroll into view
  $(window).on("scroll", function () {
    $(".counter").each(function () {
      if (!$(this).hasClass("animated") && isInViewport(this)) {
        $(this).addClass("animated");
        const target = parseInt($(this).data("target"));
        animateCounter($(this), target);
      }
    });
  });

  function isInViewport(element) {
    const elementTop = $(element).offset().top;
    const elementBottom = elementTop + $(element).outerHeight();
    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  }

  // ===== PORTFOLIO FILTER =====
  $(".filter-btn").click(function () {
    const filter = $(this).data("filter");

    $(".filter-btn").removeClass("active");
    $(this).addClass("active");

    if (filter === "all") {
      $(".portfolio-item").show();
    } else {
      $(".portfolio-item").hide();
      $('.portfolio-item[data-category="' + filter + '"]').show();
    }
  });

  // ===== SERVICE CARD CLICK =====
  $(".service-card").click(function () {
    const title = $(this).find("h3").text();
    console.log("Layanan dipilih: " + title);
  });

  // ===== SCROLL TO TOP BUTTON =====
  const scrollTopBtn = $(
    '<button id="scrollTopBtn" title="Scroll ke atas"><i class="fas fa-arrow-up"></i></button>'
  );
  $("body").append(scrollTopBtn);

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      scrollTopBtn.fadeIn();
    } else {
      scrollTopBtn.fadeOut();
    }
  });

  scrollTopBtn.click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
  });

  // ===== LAZY LOAD IMAGES =====
  if ("IntersectionObserver" in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove("lazy");
          observer.unobserve(img);
        }
      });
    });

    document.querySelectorAll("img.lazy").forEach((img) => {
      imageObserver.observe(img);
    });
  }

  // ===== TOOLTIP =====
  $(document).tooltip({
    selector: '[data-toggle="tooltip"]',
  });

  console.log("Script loaded successfully!");
});

// ===== SCROLL TO TOP BUTTON STYLES =====
$("<style>")
  .text(
    `
        #scrollTopBtn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #FFD500, #FF6B35);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            display: none;
            z-index: 999;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #scrollTopBtn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.3);
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            width: 20px;
            height: 20px;
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                width: 200px;
                height: 200px;
                opacity: 0;
            }
        }

        .lazy {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .lazy.loaded {
            opacity: 1;
        }

        [data-toggle="tooltip"] {
            cursor: help;
        }
    `
  )
  .appendTo("head");