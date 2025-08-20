// ========================================
// DATA CONFIGURATION
// ========================================
const onlyOnData = [
  {
    id: 1,
    title: "Layanan Pengadaan Barang dan Jasa",
    description: "Layanan Pengadaan Secara Elektronik",
    category: "Pemerintah",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo lpse",
  },
  {
    id: 2,
    title: "Sistem Informasi Manajemen Daerah",
    description: "Platform digital untuk data daerah",
    category: "Publik",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo simd",
  },
  {
    id: 3,
    title: "Portal Berita Kabupaten",
    description: "Informasi terkini dari pemerintah daerah",
    category: "Publik",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo portal berita",
  },
  {
    id: 4,
    title: "E-Planning Kabupaten",
    description: "Sistem perencanaan pembangunan daerah",
    category: "Pemerintah",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo e-planning",
  },
  {
    id: 5,
    title: "Layanan Perizinan Online",
    description: "Platform perizinan digital terintegrasi",
    category: "Publik",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo perizinan",
  },
  {
    id: 6,
    title: "Dashboard Monitoring Proyek",
    description: "Monitoring progres pembangunan daerah",
    category: "Pemerintah",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo monitoring",
  },
  {
    id: 7,
    title: "Dashboard Monitoring Proyek 7",
    description: "Monitoring progres pembangunan daerah",
    category: "Pemerintah",
    image:
      "https://www.soocaphoto.com/wp-content/uploads/2024/08/logo-lpse.png",
    alt: "logo monitoring",
  },
];

const layananData = [
  {
    name: "Kependudukan",
    layanan: [
      "Kartu Identitas Anak",
      "Akta Perkawinan dan Perceraian",
      "Akta Pencatatan Kematian",
      "Surat Mutasi Penduduk",
    ],
  },
  {
    name: "Perhubungan",
    layanan: [
      "Pengujian Kendaraan Bermotor",
      "Pengujian Kendaraan Bermotor",
      "Pengujian Kendaraan Bermotor",
      "Pengujian Kendaraan Bermotor",
    ],
  },
  {
    name: "Kesehatan",
    layanan: ["Daftar RSUD", "Daftar RSUD", "Daftar RSUD", "Daftar RSUD"],
  },
  {
    name: "Informasi",
    layanan: [
      "Pelayanan Konsultasi TIK Pada Aplikasi SAKTI",
      "Pelayanan Konsultasi TIK Pada Aplikasi SAKTI",
      "Pelayanan Konsultasi TIK Pada Aplikasi SAKTI",
      "Pelayanan Konsultasi TIK Pada Aplikasi SAKTI",
    ],
  },
  {
    name: "Umum",
    layanan: [
      "Sektor Peternakan",
      "Sektor Peternakan",
      "Sektor Peternakan",
      "Sektor Peternakan",
      "Sektor Peternakan",
      "Sektor Peternakan",
    ],
  },
];

// ========================================
// SLIDER CONFIGURATION
// ========================================
const sliderConfig = {
  baseConfig: {
    loop: false,
    slides: {
      perView: 1,
      spacing: 16,
    },
  },
  breakpoints: {
    "(min-width: 640px)": {
      slides: {
        perView: 2,
        spacing: 16,
      },
    },
    "(min-width: 1024px)": {
      slides: {
        perView: 3,
        spacing: 16,
      },
    },
  },
};

// ========================================
// UTILITY FUNCTIONS
// ========================================

/**
 * Filter layanan data based on selected category
 * @param {string} category - Selected category ('Semua', 'Pemerintah', 'Publik')
 * @returns {Array} Filtered data array
 */
function filterDataByCategory(category) {
  if (category === "Semua") {
    return onlyOnData;
  }
  return $.grep(onlyOnData, function (item) {
    return item.category === category;
  });
}

/**
 * Find layanan item by ID
 * @param {number} itemId - Item ID to search for
 * @returns {Object|undefined} Found item or undefined
 */
function findLayananById(itemId) {
  return $.grep(onlyOnData, function (item) {
    return item.id == itemId;
  })[0];
}

// ========================================
// CONTENT GENERATION FUNCTIONS
// ========================================

/**
 * Generate HTML content for slider slides
 * @param {Array} data - Array of layanan data
 */
function generateSliderContent(data) {
  const $sliderContainer = $("#layanan-slider");
  $sliderContainer.empty();

  $.each(data, function (index, item) {
    const slideHTML = `
      <div class="keen-slider__slide p-1">
    <div
        class="flex flex-row items-center p-4 space-x-4 bg-white shadow rounded-lg h-full cursor-pointer relative group hover:text-white"
        data-id="${item.id}"
    >
        <span class="absolute left-0 top-0 h-full w-0 bg-[#0B7642] group-hover:w-full transition-all duration-300 z-0 shadow rounded-lg"></span>
        <img src="${item.image}" alt="${item.alt}" class="w-16 h-16 object-contain flex-shrink-0 z-10" />
        <div class="min-w-0 z-10">
            <p class="text-sm font-semibold truncate" title="${item.title}">
                ${item.title}
            </p>
            <p class="text-xs text-gray-500 truncate group-hover:text-white">
                ${item.description}
            </p>
            <p class="text-sm font-semibold text-[#0B7642] uppercase mt-1 group-hover:text-white">
                ${item.category}
            </p>
        </div>
    </div>
</div>
    `;
    $sliderContainer.append(slideHTML);
  });
}

function generateLayananContent(data) {
  const $layananSectionContainer = $("#layanan-section");
  $layananSectionContainer.empty();

  $.each(data, (index, item) => {
    const layananListHTML = item.layanan
      .map((l) => {
        return `
        <li class="rounded-lg border border-gray-300 flex flex-row space-x-4 p-4 items-center hover:border-[#E43434] cursor-pointer hover:shadow-md transition-all">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="lucide lucide-users-icon lucide-users text-[#E43434] w-8 h-8">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <circle cx="9" cy="7" r="4" />
                </svg>
                <p>${l}</p>
              </li>
      `;
      })
      .join("");

    const layananGroupHTML = `
      <div class="flex flex-col space-y-2 mt-4" id="layanan-group">
        <p>${item.name}</p>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
          ${layananListHTML}
        </ul>
      </div>
    `;

    $layananSectionContainer.append(layananGroupHTML);
  });
}

// ========================================
// DOTS NAVIGATION FUNCTIONS
// ========================================

/**
 * Create dots navigation for slider
 * @param {Object} slider - KeenSlider instance
 */
function createDots(slider) {
  const $dotsWrapper = $(slider.container).find(".dots");
  if ($dotsWrapper.length === 0) return;

  const slides = slider.track.details.slides;
  $dotsWrapper.empty();

  $.each(slides, function (idx) {
    const $dot = $("<button>").addClass("dot");
    $dotsWrapper.append($dot);

    $dot.on("click", function () {
      slider.moveToIdx(idx);
    });
  });
}

/**
 * Update active state of dots navigation
 * @param {Object} slider - KeenSlider instance
 */
function updateDots(slider) {
  const $dots = $(slider.container).find(".dots .dot");
  if ($dots.length === 0) return;

  const slide = slider.track.details.rel;
  $dots.each(function (idx) {
    const $dot = $(this);
    if (idx === slide) {
      $dot.addClass("active");
    } else {
      $dot.removeClass("active");
    }
  });
}

// ========================================
// EVENT HANDLERS
// ========================================

/**
 * Add click event handlers to slider items
 */
function addClickHandlers() {
  $("#layanan-slider .keen-slider__slide [data-id]")
    .off("click")
    .on("click", function () {
      const itemId = $(this).data("id");
      const itemData = findLayananById(itemId);
      console.log("Clicked on layanan:", itemData);

      // You can add more functionality here
      // Example: open modal, navigate to detail page, etc.
    });
}

// ========================================
// SLIDER MANAGEMENT FUNCTIONS
// ========================================

/**
 * Create KeenSlider configuration based on data
 * @param {Array} data - Data array for determining configuration
 * @returns {Object} Slider configuration object
 */
function createSliderConfig(data) {
  return {
    loop: false, // Enable loop only if more than 3 items
    slides: {
      perView: 1,
      spacing: 16,
    },
    breakpoints: {
      "(min-width: 640px)": {
        slides: {
          perView: Math.min(2, data.length),
          spacing: 16,
        },
      },
      "(min-width: 1024px)": {
        slides: {
          perView: Math.min(3, data.length),
          spacing: 16,
        },
      },
    },
    created: function (slider) {
      createDots(slider);
      updateDots(slider);
      addClickHandlers();
    },
    slideChanged: function (slider) {
      updateDots(slider);
    },
  };
}

/**
 * Initialize new slider with given data
 * @param {Array} data - Data array for slider content
 */
function initializeSlider(data) {
  generateSliderContent(data);
  const config = createSliderConfig(data);
  window.layananSlider = new KeenSlider("#layanan-slider", config);
}

/**
 * Update existing slider with new data
 * @param {Array} data - New data array for slider content
 */
function updateSlider(data) {
  // Destroy current slider if exists
  if (window.layananSlider) {
    window.layananSlider.destroy();
  }

  // Initialize with new data
  initializeSlider(data);
}

// ========================================
// INITIALIZATION & EVENT BINDING
// ========================================

$(document).ready(function () {
  // Initialize slider with all data
  initializeSlider(onlyOnData);

  // Bind category filter event
  $("#kategori-filter").on("change", function () {
    const selectedCategory = $(this).val();
    const filteredData = filterDataByCategory(selectedCategory);
    updateSlider(filteredData);
  });

  // === LOGIKA UNTUK TAB SUMBER DAYA ===
  $(".tab-button").on("click", function () {
    // Simpan tombol yang sedang diklik
    var $this = $(this);

    // 1. Reset semua tombol ke status non-aktif
    $(".tab-button")
      .removeClass("border-[#0B7642]")
      .addClass("border-gray-200");

    // 2. Atur tombol yang diklik menjadi aktif
    $this.removeClass("border-gray-200").addClass("border-[#0B7642]");

    // 3. Sembunyikan semua panel konten
    $(".tab-pane").removeClass("active");

    // 4. Tampilkan panel konten yang sesuai dengan tombol yang diklik
    var target = $this.data("target");
    $(target).addClass("active");
  });

  const mobileMenu = $("#mobile-menu");
  const openMenuButton = $("#open-menu-button");
  const closeMenuButton = $("#close-menu-button");

  // Fungsi untuk mencegah scroll di background saat menu terbuka
  function toggleBodyScroll(shouldLock) {
    $("body").css("overflow", shouldLock ? "hidden" : "");
  }

  // Event listener untuk membuka menu
  openMenuButton.on("click", function () {
    mobileMenu.removeClass("hidden");
    toggleBodyScroll(true); // Kunci scroll
  });

  // Event listener untuk menutup menu
  closeMenuButton.on("click", function () {
    mobileMenu.addClass("hidden");
    toggleBodyScroll(false); // Buka kembali scroll
  });

  // Logika untuk status aktif di bottom bar
  $(".nav-item").on("click", function () {
    // Jangan beri status aktif pada tombol menu drawer
    if (!$(this).is("#open-menu-button")) {
      $(".nav-item").removeClass("active");
      $(this).addClass("active");
    }
  });

  generateLayananContent(layananData);
});
