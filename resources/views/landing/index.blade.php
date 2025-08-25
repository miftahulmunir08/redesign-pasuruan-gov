<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 + Line Awesome Boilerplate</title>

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Line Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />

    <style>
      :root {
        --bg-dark-primary: #111827;
        --bg-dark-secondary: #1a0d06;
        --bg-hero: #4a2511;
        --bg-light: #f9fafb;
        --accent-orange: #02ab5a;
        --accent-blue: #02ab5a;
        --text-light: #ffffff;
        --text-dark: #1f2937;
        --text-muted: #6b7280;
        --border-color: #e5e7eb;
      }

      body {
        padding: 0;
        margin: 0;
        font-family: "Poppins", sans-serif;
      }

      /* .background-div-2 {
        width: 100%;
        height: 40vh;
        background: linear-gradient(
          135deg,
          #02ab5a,
          #46c057
        );
        border-bottom-left-radius: 50% 19%;
        border-bottom-right-radius: 70% 19%;
        overflow: hidden;
      } */

      .background-div-2 {
        width: 100%;
        height: 40vh;
        background: linear-gradient(
            135deg,
            rgba(2, 171, 90, 0.8),
            rgba(70, 192, 87, 0.8)
          ),
          url("{{ asset('storage/uploads/hero_section/202409_205-66d55924c94eb.jpg') }}"); /* path gambar */

        background-size: cover; /* biar full */
        background-position: center;
        background-repeat: no-repeat;

        border-bottom-left-radius: 50% 19%;
        border-bottom-right-radius: 70% 19%;
        overflow: hidden;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      }

      .shadow-logo {
        box-shadow: 0px 2px 5px rgba(238, 255, 0, 0.795) !important;
        /* box-shadow: 0px 4px 20px rgb(12, 204, 111) !important; */
      }

      .bg-green-icon {
        background-color: #02ab5a;
      }

      .bg-green-icon:hover {
        background-color: #ffc107 !important; /* Bootstrap warning (yellow) */
        color: #02ab5a !important; /* hijau */
        transform: translateY(-5px); /* naik ke atas */
        box-shadow: 0px 4px 24px 0px rgb(212, 235, 6) !important;
      }

      .bg-green-icon:hover + .title-icon {
        color: #ffc107 !important; /* hijau */
        transform: translateY(-5px); /* naik ke atas */
      }

      .btn-warning {
        position: relative;
        overflow: hidden;
      }

      .btn-warning::before {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(
          120deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.5) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        transform: skewX(-25deg);
        animation: shine 2s ease-in-out infinite; /* jalan terus */
      }

      @keyframes shine {
        0% {
          left: -75%;
        }
        100% {
          left: 125%;
        }
      }

      .arrow-diagonal {
        display: inline-block;
        transform: rotate(-45deg); /* serong kanan atas */
        transition: transform 0.3s ease;
      }

      /* animasi saat hover tombol */
      .btn:hover .arrow-diagonal {
        transform: rotate(-45deg);
      }

      .article-list:hover {
        box-shadow: 0px 4px 24px 0px rgba(3, 133, 24, 0.678) !important;
      }

      .pointer {
        cursor: pointer;
      }
      /* default fade dari Bootstrap */
      .modal.fade .modal-dialog {
        transform: scale(0.9);
        opacity: 0;
        transition: all 0.4s ease-in-out;
      }

      .modal.show .modal-dialog {
        transform: scale(1);
        opacity: 1;
      }

      .video-bg {
        position: fixed; /* atau absolute kalau hanya untuk section tertentu */
        top: 0;
        left: 0;
        width: 100vw;
        height: 100%;
        z-index: -1; /* biar di belakang konten */
        overflow: hidden;
      }
      .video-bg iframe {
        width: 100vw;
        height: 100vh;
        pointer-events: none; /* biar nggak bisa diklik */
      }

      .title-head {
        font-size: 17pt;
      }
      .subtitle-head {
        font-size: 17pt;
      }

      /* Tablet */
      @media (max-width: 1024px) {
        .title-head {
          font-size: 15pt;
        }
        .subtitle-head {
          font-size: 15pt;
        }
      }

      /* Phone */
      @media (max-width: 768px) {
        .title-head {
          font-size: 23pt;
        }
        .subtitle-head {
          font-size: 18pt;
        }
      }

      /* === AKSESIBILITAS STYLES === */
      .dyslexia-font {
        font-family: var(--font-dyslexia) !important;
      }
      .highlight-links a {
        background-color: #ffdd00 !important;
        color: black !important;
        padding: 2px 4px;
        border-radius: 3px;
      }
      .highlight-headings h1,
      .highlight-headings h2,
      .highlight-headings h3,
      .highlight-headings h4 {
        background-color: #bde4ff !important;
        display: inline-block;
      }
      .bold-text p,
      .bold-text li,
      .bold-text span,
      .bold-text div {
        font-weight: bold !important;
      }

      /* === PANEL AKSESIBILITAS === */
      /* Panel Aksesibilitas */
      #accessibility-panel {
        position: fixed;
        top: 0;
        right: 0;
        width: 320px;
        height: 100vh;
        background-color: #fff;
        z-index: 1056;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        transform: translateX(100%);
        transition: transform 0.4s ease-in-out;
        display: flex;
        flex-direction: column;
      }

      #accessibility-panel.show {
        transform: translateX(0);
      }

      /* Tombol yang menyatu dengan panel */
      #accessibility-handle {
        position: absolute;
        top: 250px;
        left: -60px; /* keluar dari panel */
        width: 60px;
        height: 40px;
        /* background: #ffdd46; */
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #fff;
        font-size: 24px;
        box-shadow: -2px 2px 6px rgba(0, 0, 0, 0.2);
      }

      .panel-header {
        padding: 1rem;
        border-bottom: 1px solid var(--border-color);
      }
      .panel-header h3 {
        font-size: 1.5rem;
        color: var(--text-dark);
      }
      .panel-content {
        padding: 1rem;
        overflow-y: auto;
        flex-grow: 1;
      }
      .panel-content h4 {
        font-size: 0.8rem;
        color: #6c757d;
        text-transform: uppercase;
        font-weight: 700;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid var(--border-color);
      }
      .panel-content .setting-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
      }
      .panel-content .setting-label {
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.75rem;
      }
      .panel-content .btn-group .btn {
        font-size: 0.85rem;
      }
      .panel-content .btn-group .btn.active {
        background-color: var(--accent-orange);
        border-color: var(--accent-orange);
      }

      /* === TOMBOL FLOAT AKSESIBILITAS === */
      #accessibility-toggle-btn {
        position: absolute; /* posisikan relatif ke panel */
        top: 50%; /* di tengah vertikal panel */
        right: -25px; /* keluar sedikit dari panel */
        transform: translateY(-50%);
        width: 50px; /* diameter tombol */
        height: 50px;
        border-radius: 50%; /* bulat */
        background-color: #ffffff; /* background tombol */
        border: 3px solid #0056d2; /* warna border */
        color: #0056d2; /* warna ikon */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px; /* ukuran ikon */
        cursor: pointer;
        z-index: 1000; /* biar di atas elemen lain */
      }

      #accessibility-toggle-btn:hover {
        background-color: #f0f0f0;
      }

      .pagination .page-link {
        border: 1px solid #198754; /* border hijau */
        color: #198754; /* teks hijau */
      }

      .pagination .page-link:hover {
        background-color: #198754; /* hover hijau */
        color: #fff; /* teks putih */
      }

      .pagination .page-item.active .page-link {
        background-color: #198754; /* halaman aktif hijau */
        border-color: #198754;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div
      data-bs-spy="scroll"
      data-bs-target="#sideNav"
      data-bs-offset="100"
      tabindex="0"
    >
      <!-- <button id="accessibility-toggle-btn">
        <i class="las la-wheelchair"></i>
      </button> -->

      <div id="accessibility-panel">
        <div id="accessibility-handle" style="background-color: #ffdd46">
          <i class="las la-wheelchair"></i>
        </div>

        <div class="panel-header">
          <div class="d-flex" style="justify-content: space-between">
            <div>
              <h3><i class="las la-wheelchair"></i> Aksesibilitas</h3>
            </div>
            <div>
              <a href="#"
                ><i
                  class="las la-times-circle text-danger fs-3 close-setting"
                  style="border-radius: 25px"
                ></i>
              </a>
            </div>
          </div>
        </div>
        <div class="panel-content">
          <h4><i class="bi bi-volume-up"></i> SUARA</h4>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-volume-up-fill"></i> Mode Suara
            </div>
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                type="checkbox"
                id="modeSuaraToggle"
              />
            </div>
          </div>

          <h4><i class="bi bi-fonts"></i> TEKS</h4>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-book"></i> Font Disleksia
            </div>
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                type="checkbox"
                id="fontDisleksiaToggle"
              />
            </div>
          </div>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-text-size"></i> Ukuran Teks
            </div>
            <div class="input-group w-50">
              <button
                class="btn btn-outline-secondary"
                type="button"
                id="decreaseText"
              >
                -
              </button>
              <span class="input-group-text" id="textSizeValue">100%</span>
              <button
                class="btn btn-outline-secondary"
                type="button"
                id="increaseText"
              >
                +
              </button>
            </div>
          </div>
          <div class="setting-item flex-column align-items-start">
            <div class="setting-label mb-2">
              <i class="bi bi-arrows-vertical"></i> Tinggi Baris
            </div>
            <div class="btn-group w-100" id="lineHeightGroup">
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="normal"
              >
                Normal
              </button>
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="1.5"
              >
                1.5x
              </button>
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="2"
              >
                2x
              </button>
            </div>
          </div>
          <div class="setting-item flex-column align-items-start">
            <div class="setting-label mb-2">
              <i class="bi bi-textarea-t"></i> Rata Tulisan
            </div>
            <div class="btn-group w-100" id="textAlignGroup">
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="left"
              >
                <i class="bi bi-text-left"></i> Kiri
              </button>
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="center"
              >
                <i class="bi bi-text-center"></i> Tengah
              </button>
              <button
                type="button"
                class="btn btn-outline-success"
                data-value="right"
              >
                <i class="bi bi-text-right"></i> Kanan
              </button>
            </div>
          </div>

          <h4><i class="bi bi-palette"></i> KONTEN</h4>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-type-bold"></i> Pertebal Huruf
            </div>
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                type="checkbox"
                id="boldTextToggle"
              />
            </div>
          </div>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-link-45deg"></i> Sorot Tautan
            </div>
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                type="checkbox"
                id="highlightLinksToggle"
              />
            </div>
          </div>
          <div class="setting-item">
            <div class="setting-label">
              <i class="bi bi-type-h1"></i> Sorot Judul
            </div>
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                type="checkbox"
                id="highlightHeadingsToggle"
              />
            </div>
          </div>
        </div>
        <div class="panel-footer p-3 border-top">
          <button class="btn btn-secondary w-100" id="resetAccessibility">
            Reset Pengaturan
          </button>
          <button
            class="btn w-100 mt-2 close-setting text-white"
            style="background-color: #02ab5a"
          >
            Tutup Pengaturan
          </button>
        </div>
      </div>

      <!-- <div id="accessibility-panel">
        <div id="accessibility-handle">
          <i class="las la-wheelchair"></i>
        </div>

        <div
          class="p-3 border-bottom d-flex justify-content-between align-items-center"
        >
          <h5 class="mb-0"><i class="las la-wheelchair"></i> Aksesibilitas</h5>
          <a href="#" id="close-panel">
            <i class="las la-times-circle text-danger fs-3"></i>
          </a>
        </div>
        <div class="p-3">
          <h6 class="fw-bold">Suara</h6>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" id="modeSuara" />
            <label class="form-check-label" for="modeSuara">Mode Suara</label>
          </div>

          <h6 class="fw-bold">Teks</h6>
          <div class="form-check form-switch mb-3">
            <input
              class="form-check-input"
              type="checkbox"
              id="fontDisleksia"
            />
            <label class="form-check-label" for="fontDisleksia"
              >Font Disleksia</label
            >
          </div>

          <label class="form-label">Ukuran Teks</label>
          <div class="d-flex align-items-center mb-3">
            <button
              class="btn btn-outline-secondary btn-sm me-2"
              id="decreaseText"
            >
              -
            </button>
            <span id="textSize" class="mx-2">100%</span>
            <button
              class="btn btn-outline-secondary btn-sm ms-2"
              id="increaseText"
            >
              +
            </button>
          </div>

          <label class="form-label">Tinggi Baris</label>
          <div class="btn-group" role="group">
            <button class="btn btn-outline-secondary">Normal</button>
            <button class="btn btn-outline-secondary">1.5x</button>
            <button class="btn btn-outline-secondary">2x</button>
          </div>
        </div>
      </div> -->
    </div>

    <div class="col-12">
      <div class="background-div-2 text-center">
        <img
          class="mt-5"
          src="{{ asset('storage/uploads/logo/pasuruan.png') }}"
          width="75"
          alt="PASURUANKAB.GO.ID"
        />
        <h1 class="mt-4 title-head" style="color: #fcfcfd">
          PASURUANKAB.GO.ID
        </h1>
        <h3 class="subtitle-head" style="color: #fcfcfd">
          Portal Pemerintah Kabupaten Pasuruan
        </h3>
      </div>

      <div class="video-bg">
        <!-- <iframe
          src="https://www.youtube.com/embed/KBM3Ba9XDgA?autoplay=1&mute=1&loop=1&playlist=KBM3Ba9XDgA&controls=0&showinfo=0&modestbranding=1&iv_load_policy=3"
          frameborder="0"
          allow="autoplay; fullscreen"
          allowfullscreen
        >
        </iframe> -->
      </div>

      <div class="col-lg-12 col-12 mt-5">
        <div class="container d-flex justify-content-center">
          <div class="col-lg-8 col-12">
            <div class="input-group">
              <input
                type="text"
                class="form-control p-3"
                id="floatingInputGroup1"
                style="
                  border-top-left-radius: 35px;
                  border-bottom-left-radius: 35px;
                  border-top-right-radius: 0;
                  border-bottom-right-radius: 0;
                "
                placeholder="Yuk Cari Tahu Tentang Kabupaten Pasuruan"
              />
              <div class="input-group-append">
                <button
                  class="btn btn-outline-success p-3"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#searchResultModal"
                  style="
                    border-top-right-radius: 35px;
                    border-bottom-right-radius: 35px;
                  "
                >
                  Cari
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="container text-center">
            <!-- Tambah g-4 untuk jarak antar col -->
            <div class="row justify-content-center">
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#profileModal"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="border-radius: 50px; width: 75px"
                >
                  <!-- <i class="las la-university  text-white" style="font-size: 30pt"></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/company.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  Profile
                </h5>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://ppid.pasuruankab.go.id/`)"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="border-radius: 50px; width: 75px"
                >
                  <!-- <i class="las la-info-circle text-white" style="font-size: 30pt"></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/policeman.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  PPID
                </h5>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://satudata.pasuruankab.go.id/`)"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="border-radius: 50px; width: 75px"
                >
                  <!-- <i
                    class="las la-database text-white"
                    style="font-size: 30pt"
                  ></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/file.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  Satu Data
                </h5>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                style=""
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="
                    border-radius: 50px;
                    background-color: #02ab5a;
                    width: 75px;
                  "
                >
                  <!-- <i
                    class="las la-phone text-white"
                    style="font-size: 30pt"
                  ></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/passport.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  Kontak
                </h5>
              </div>

              <div
                class="col-4 col-lg-2 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#aplikasiModal"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="border-radius: 50px; width: 75px"
                >
                  <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/news.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  Aplikasi
                </h5>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#youtubeModal"
              >
                <div
                  class="col-3 p-3 mx-auto bg-green-icon shadow"
                  style="border-radius: 50px; width: 75px"
                >
                  <!-- <i
                    class="las la-video text-white"
                    style="font-size: 30pt"
                  ></i> -->
                  <img src="{{ asset('storage/uploads/icon_app/board.png') }}" width="40px" />
                </div>
                <h5
                  class="card-title mt-3 fw-bold title-icon"
                  style="color: rgb(172, 172, 172); font-size: 13pt"
                >
                  Video Compro
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="text-center d-lg-block d-none"
          style="
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
          "
        >
          <button
            class="btn btn-warning mt-5"
            style="background-color: #ffdd46"
          >
            Masuk Website Utama <i class="las la-arrow-circle-right"></i>
          </button>
        </div>

        <div
          class="text-center w-100 d-lg-none d-block"
          style="
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
          "
        >
          <button
            class="btn btn-warning mt-5 w-100 p-3"
            style="background-color: #ffdd46"
          >
            Masuk Website Utama <i class="las la-arrow-circle-right"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Modal Popup Search Result -->
    <div
      class="modal fade"
      id="searchResultModal"
      tabindex="-1"
      aria-labelledby="searchResultModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
      >
        <div class="modal-content animate-modal rounded-4 shadow">
          <div class="modal-header">
            <h5 class="modal-title fw-bold" id="searchResultModalLabel">
              Hasil Pencarian Artikel
            </h5>
            <button
              type="button"
              class="bg-danger ms-auto"
              style="color: white !important; border-radius: 20px"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="las la-times"></i>
            </button>
          </div>
          <div class="modal-body">
            <!-- List Article -->
            <div class="card mb-3 shadow-sm article-list">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="{{ asset('storage/uploads/hero/202409_205-66d55924c94eb.jpg') }}"
                    class="img-fluid rounded-start"
                    alt="..."
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Judul Artikel 1</h5>
                    <p class="card-text">
                      Ringkasan singkat artikel ini. Klik untuk membaca lebih
                      lanjut.
                    </p>
                    <!-- Tag & Category -->
                    <div class="d-flex align-items-center mt-2">
                      <div>
                        <span class="badge bg-success">#Wisata</span>
                        <span class="badge bg-success">Pasuruan</span>
                      </div>
                      <a
                        href="#"
                        class="btn btn-sm btn-outline-success ms-auto"
                      >
                        Read More
                        <i class="las la-arrow-circle-right arrow-diagonal"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mb-3 shadow-sm article-list">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="{{ asset('storage/uploads/hero/202402_206-65bc616742301.jpg') }}"
                    class="img-fluid rounded-start"
                    alt="..."
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Judul Artikel 2</h5>
                    <p class="card-text">
                      Ringkasan singkat artikel ini. Klik untuk membaca lebih
                      lanjut.
                    </p>
                    <!-- Tag & Category -->
                    <div class="d-flex align-items-center mt-2">
                      <div>
                        <span class="badge bg-success">#Wisata</span>
                        <span class="badge bg-success">Pasuruan</span>
                      </div>
                      <a
                        href="#"
                        class="btn btn-sm btn-outline-success ms-auto"
                      >
                        Read More
                        <i class="las la-arrow-circle-right arrow-diagonal"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            <!-- /List Article -->
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Popup Search Result -->

    <!-- Modal Profile -->
    <div
      class="modal fade"
      id="profileModal"
      tabindex="-1"
      aria-labelledby="searchResultModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
      >
        <div class="modal-content animate-modal rounded-4 shadow">
          <div class="modal-header justify-content-center">
            <h5
              class="modal-title fw-bold text-center"
              id="searchResultModalLabel"
            >
              Profile
            </h5>
            <button
              type="button"
              class="bg-danger ms-auto"
              style="color: white !important; border-radius: 20px"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="las la-times"></i>
            </button>
          </div>
          <div class="modal-body p-4">
            <!-- List Article -->
            <div class="row justify-content-evenly">
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#profileModal"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-university  text-white" style="font-size: 30pt"></i> -->
                    <img src="assets/icon/company.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Arti&nbsp;Lambang
                  </h5>
                </div>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://ppid.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-info-circle text-white" style="font-size: 30pt"></i> -->
                    <img src="assets/icon/policeman.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Peta&nbsp;Pasuruan
                  </h5>
                </div>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://satudata.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-database text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/icon/file.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Visi&nbsp;&&nbsp;Misi
                  </h5>
                </div>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div class="col-4 col-lg-2 mt-4 pointer" style="">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="
                      border-radius: 50px;
                      background-color: #02ab5a;
                      width: 75px;
                    "
                  >
                    <!-- <i
                    class="las la-phone text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/icon/passport.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Pemerintahan
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-2 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/icon/news.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Sejarah&nbsp;Kabupaten&nbsp;Pasuruan
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-2 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/icon/news.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Gambaran&nbsp;Umum
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Profile -->

    <!-- Modal Kontak -->
    <div
      class="modal fade"
      id="contactModal"
      tabindex="-1"
      aria-labelledby="searchResultModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
      >
        <div class="modal-content animate-modal rounded-4 shadow">
          <div class="modal-header justify-content-center">
            <h5
              class="modal-title fw-bold text-center"
              id="searchResultModalLabel"
            >
              Kontak
            </h5>
            <button
              type="button"
              class="bg-danger ms-auto"
              style="color: white !important; border-radius: 20px"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="las la-times"></i>
            </button>
          </div>
          <div class="modal-body p-4">
            <!-- List Article -->
            <div class="row justify-content-evenly">
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#profileModal"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-university  text-white" style="font-size: 30pt"></i> -->
                    <img src="{{ asset('storage/uploads/medsos/icon-112.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Panggilan&nbsp;Darurat
                  </h5>
                </div>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://ppid.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-info-circle text-white" style="font-size: 30pt"></i> -->
                    <img src="{{ asset('storage/uploads/medsos/icon-wa.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Whatsapp
                  </h5>
                </div>
              </div>
              <div
                class="col-4 col-lg-2 mt-4 pointer"
                onclick="goToPage(`https://satudata.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-database text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="{{ asset('storage/uploads/medsos/facebook.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Facebook
                  </h5>
                </div>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div class="col-4 col-lg-2 mt-4 pointer" style="">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="
                      border-radius: 50px;
                      background-color: #02ab5a;
                      width: 75px;
                    "
                  >
                    <!-- <i
                    class="las la-phone text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="{{ asset('storage/uploads/medsos/instagram.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Instagram
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-2 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="{{ asset('storage/uploads/medsos/icon-xt.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Twitter
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-2 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="{{ asset('storage/uploads/medsos/icon-ttk.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Tiktok
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-2 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="{{ asset('storage/uploads/medsos/youtube.png') }}" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Youtube
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Kontak -->

    <!-- Modal Aplikasi -->
    <div
      class="modal fade"
      id="aplikasiModal"
      tabindex="-1"
      aria-labelledby="searchResultModalLabel"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
      >
        <div class="modal-content animate-modal rounded-4 shadow">
          <div class="modal-header justify-content-center">
            <h5
              class="modal-title fw-bold text-center"
              id="searchResultModalLabel"
            >
              Aplikasi
            </h5>
            <button
              type="button"
              class="bg-danger ms-auto"
              style="color: white !important; border-radius: 20px"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="las la-times"></i>
            </button>
          </div>
          <div class="modal-body p-4">
            <!-- List Article -->
            <div class="row justify-content-evenly">
              <div
                class="col-4 col-lg-6 mt-4 pointer"
                data-bs-toggle="modal"
                data-bs-target="#profileModal"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-university  text-white" style="font-size: 30pt"></i> -->
                    <img src="assets/medsos/icon-112.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Indeks Kepuasan Masyarakat
                  </h5>
                </div>
              </div>
              <div
                class="col-4 col-lg-6 mt-4 pointer"
                onclick="goToPage(`https://ppid.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i class="las la-info-circle text-white" style="font-size: 30pt"></i> -->
                    <img src="assets/medsos/icon-wa.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Sistem Penghubung Layanan Pemerintah
                  </h5>
                </div>
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div
                class="col-4 col-lg-6 mt-4 pointer"
                onclick="goToPage(`https://satudata.pasuruankab.go.id/`)"
              >
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-database text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/medsos/icon-fb.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Layanan Pengadaan Barang/Jasa
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-6 mt-4 pointer" style="">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="
                      border-radius: 50px;
                      background-color: #02ab5a;
                      width: 75px;
                    "
                  >
                    <!-- <i
                    class="las la-phone text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/medsos/icon-ig.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Pendaftaran Murid Baru
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-6 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/medsos/icon-xt.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Layanan Pengaduan Penyimpanan Aparat Pemerintah
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-6 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/medsos/icon-ttk.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Peminjaman Sarana Prasarana
                  </h5>
                </div>
              </div>

              <div class="col-4 col-lg-6 mt-4 pointer">
                <div class="d-flex flex-column align-items-center">
                  <div
                    class="col-3 p-3 mx-auto bg-green-icon shadow"
                    style="border-radius: 50px; width: 75px"
                  >
                    <!-- <i
                    class="las la-mobile-alt text-white"
                    style="font-size: 30pt"
                  ></i> -->
                    <img src="assets/medsos/icon-yt.png" width="40px" />
                  </div>
                  <h5
                    class="card-title mt-3 fw-bold title-icon text-center"
                    style="color: rgb(172, 172, 172); font-size: 13pt"
                  >
                    Layanan UMKM
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Aplikasi -->

    <!-- Modal Fullscreen -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-dark">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-flex justify-content-center align-items-center p-0"
          >
            <iframe
              id="youtubeFrame"
              width="100%"
              height="100%"
              src=""
              title="YouTube video player"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen
            >
            </iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Loading -->
    <div class="modal fade" id="loadingModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div
          class="modal-content d-flex justify-content-center align-items-center p-4"
        >
          <div class="spinner-border text-success mb-3" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <p class="mb-0">Sedang diarahkan...</p>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function goToPage(url) {
        // Tampilkan modal loading
        var loading = new bootstrap.Modal(
          document.getElementById("loadingModal")
        );
        loading.show();

        // Delay 2 detik lalu redirect
        setTimeout(function () {
          window.location.href = url;
        }, 2000);
      }

      $(document).ready(function () {
        $("#accessibility-handle").click(function () {
          $("#accessibility-panel").toggleClass("show");
          $("#overlay").fadeToggle();
        });

        // klik X atau overlay untuk menutup
        $("#close-panel, #overlay").click(function (e) {
          e.preventDefault();
          $("#accessibility-panel").removeClass("show");
          $("#overlay").fadeOut();
        });

        const body = $("body");
        const html = $("html");

        // =============================================
        // PENGELOLA PENGATURAN (LOAD & SAVE)
        // =============================================
        const settings = {
          modeSuara: false,
          fontDisleksia: false,
          textSize: 100,
          lineHeight: "normal",
          textAlign: "left",
          boldText: false,
          highlightLinks: false,
          highlightHeadings: false,
        };

        var videoSrc =
          "https://www.youtube.com/embed/KBM3Ba9XDgA?autoplay=1&mute=1&loop=1&playlist=KBM3Ba9XDgA&controls=0&showinfo=0&modestbranding=1&iv_load_policy=3";

        $("#youtubeModal").on("shown.bs.modal", function () {
          $("#youtubeFrame").attr("src", videoSrc);
        });

        $("#youtubeModal").on("hidden.bs.modal", function () {
          $("#youtubeFrame").attr("src", ""); // stop video
        });

        $("#floatingInputGroup1").keypress(function (e) {
          if (e.which == 13) {
            // 13 = Enter
            e.preventDefault(); // biar tidak reload form

            // buka modal Bootstrap 5
            $("#searchResultModal").modal("show");
          }
        });

        function saveSettings() {
          localStorage.setItem(
            "accessibilitySettings",
            JSON.stringify(settings)
          );
        }

        function applySettings() {
          // Terapkan semua pengaturan dari object 'settings'
          body.toggleClass("dyslexia-font", settings.fontDisleksia);
          body.toggleClass("bold-text", settings.boldText);
          body.toggleClass("highlight-links", settings.highlightLinks);
          body.toggleClass("highlight-headings", settings.highlightHeadings);
          html.css("font-size", settings.textSize + "%");
          body.css("line-height", settings.lineHeight);
          body.css("text-align", settings.textAlign);

          // Perbarui UI di panel
          $("#modeSuaraToggle").prop("checked", settings.modeSuara);
          $("#fontDisleksiaToggle").prop("checked", settings.fontDisleksia);
          $("#boldTextToggle").prop("checked", settings.boldText);
          $("#highlightLinksToggle").prop("checked", settings.highlightLinks);
          $("#highlightHeadingsToggle").prop(
            "checked",
            settings.highlightHeadings
          );
          $("#textSizeValue").text(settings.textSize + "%");
          $("#lineHeightGroup .btn")
            .removeClass("active")
            .filter(`[data-value="${settings.lineHeight}"]`)
            .addClass("active");
          $("#textAlignGroup .btn")
            .removeClass("active")
            .filter(`[data-value="${settings.textAlign}"]`)
            .addClass("active");
        }

        function loadSettings() {
          const savedSettings = localStorage.getItem("accessibilitySettings");
          if (savedSettings) {
            Object.assign(settings, JSON.parse(savedSettings));
          }
          applySettings();
        }

        function resetSettings() {
          if (
            confirm(
              "Apakah Anda yakin ingin mereset semua pengaturan aksesibilitas?"
            )
          ) {
            localStorage.removeItem("accessibilitySettings");
            location.reload();
          }
        }

        // =============================================
        // KONTROL PANEL
        // =============================================
        $("#accessibility-toggle-btn").on("click", () =>
          $("#accessibility-panel").toggleClass("show")
        );

        $(".close-setting").on("click", () =>
          $("#accessibility-panel").toggleClass("show")
        );

        $("#resetAccessibility").on("click", resetSettings);

        // =============================================
        // EVENT HANDLERS UNTUK SETIAP FITUR
        // =============================================

        // 1. Mode Suara (Text-to-Speech)
        const synth = window.speechSynthesis;
        let utterance = new SpeechSynthesisUtterance();

        function speak(text) {
          if (synth.speaking) {
            synth.cancel();
          }
          utterance.text = text;
          utterance.lang = "id-ID";
          synth.speak(utterance);
        }

        function toggleTTSEvents(enable) {
          const readableElements =
            "p, a, h1, h2, h3, h4, h5, button, .setting-label";
          if (enable) {
            $(document).on("mouseenter", readableElements, function () {
              speak($(this).text());
            });
            $(document).on("mouseleave", readableElements, () =>
              synth.cancel()
            );
          } else {
            $(document).off("mouseenter").off("mouseleave");
            synth.cancel();
          }
        }

        $("#modeSuaraToggle").on("change", function () {
          settings.modeSuara = $(this).is(":checked");
          toggleTTSEvents(settings.modeSuara);
          saveSettings();
        });

        // 2. Font Disleksia
        $("#fontDisleksiaToggle").on("change", function () {
          settings.fontDisleksia = $(this).is(":checked");
          body.toggleClass("dyslexia-font", settings.fontDisleksia);
          saveSettings();
        });

        // 3. Pertebal Huruf
        $("#boldTextToggle").on("change", function () {
          settings.boldText = $(this).is(":checked");
          body.toggleClass("bold-text", settings.boldText);
          saveSettings();
        });

        // 4. Sorot Tautan & Judul
        $("#highlightLinksToggle").on("change", function () {
          settings.highlightLinks = $(this).is(":checked");
          body.toggleClass("highlight-links", settings.highlightLinks);
          saveSettings();
        });
        $("#highlightHeadingsToggle").on("change", function () {
          settings.highlightHeadings = $(this).is(":checked");
          body.toggleClass("highlight-headings", settings.highlightHeadings);
          saveSettings();
        });

        // 5. Ukuran Teks
        $("#increaseText").on("click", function () {
          if (settings.textSize < 200) {
            settings.textSize += 10;
            applySettings();
            saveSettings();
          }
        });
        $("#decreaseText").on("click", function () {
          if (settings.textSize > 50) {
            settings.textSize -= 10;
            applySettings();
            saveSettings();
          }
        });

        // 6. Tinggi Baris
        $("#lineHeightGroup .btn").on("click", function () {
          settings.lineHeight = $(this).data("value");
          applySettings();
          saveSettings();
        });

        // 7. Rata Tulisan
        $("#textAlignGroup .btn").on("click", function () {
          settings.textAlign = $(this).data("value");
          applySettings();
          saveSettings();
        });

        // Inisialisasi pengaturan saat halaman dimuat
        loadSettings();
      });
    </script>
  </body>
</html>
