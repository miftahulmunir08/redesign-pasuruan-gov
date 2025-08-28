<style>
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
        left: -60px;
        /* keluar dari panel */
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
        position: absolute;
        /* posisikan relatif ke panel */
        top: 50%;
        /* di tengah vertikal panel */
        right: -25px;
        /* keluar sedikit dari panel */
        transform: translateY(-50%);
        width: 50px;
        /* diameter tombol */
        height: 50px;
        border-radius: 50%;
        /* bulat */
        background-color: #ffffff;
        /* background tombol */
        border: 3px solid #0056d2;
        /* warna border */
        color: #0056d2;
        /* warna ikon */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        /* ukuran ikon */
        cursor: pointer;
        z-index: 1000;
        /* biar di atas elemen lain */
    }

    #accessibility-toggle-btn:hover {
        background-color: #f0f0f0;
    }
</style>


<div data-bs-spy="scroll" data-bs-target="#sideNav" data-bs-offset="100" tabindex="0">
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
                    <a href="#"><i class="las la-times-circle text-danger fs-3 close-setting" style="border-radius: 25px"></i>
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
                    <input class="form-check-input" type="checkbox" id="modeSuaraToggle" />
                </div>
            </div>

            <h4><i class="bi bi-fonts"></i> TEKS</h4>
            <div class="setting-item">
                <div class="setting-label">
                    <i class="bi bi-book"></i> Font Disleksia
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="fontDisleksiaToggle" />
                </div>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <i class="bi bi-text-size"></i> Ukuran Teks
                </div>
                <div class="input-group w-50">
                    <button class="btn btn-outline-secondary" type="button" id="decreaseText">
                        -
                    </button>
                    <span class="input-group-text" id="textSizeValue">100%</span>
                    <button class="btn btn-outline-secondary" type="button" id="increaseText">
                        +
                    </button>
                </div>
            </div>
            <div class="setting-item flex-column align-items-start">
                <div class="setting-label mb-2">
                    <i class="bi bi-arrows-vertical"></i> Tinggi Baris
                </div>
                <div class="btn-group w-100" id="lineHeightGroup">
                    <button type="button" class="btn btn-outline-success" data-value="normal">
                        Normal
                    </button>
                    <button type="button" class="btn btn-outline-success" data-value="1.5">
                        1.5x
                    </button>
                    <button type="button" class="btn btn-outline-success" data-value="2">
                        2x
                    </button>
                </div>
            </div>
            <div class="setting-item flex-column align-items-start">
                <div class="setting-label mb-2">
                    <i class="bi bi-textarea-t"></i> Rata Tulisan
                </div>
                <div class="btn-group w-100" id="textAlignGroup">
                    <button type="button" class="btn btn-outline-success" data-value="left">
                        <i class="bi bi-text-left"></i> Kiri
                    </button>
                    <button type="button" class="btn btn-outline-success" data-value="center">
                        <i class="bi bi-text-center"></i> Tengah
                    </button>
                    <button type="button" class="btn btn-outline-success" data-value="right">
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
                    <input class="form-check-input" type="checkbox" id="boldTextToggle" />
                </div>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <i class="bi bi-link-45deg"></i> Sorot Tautan
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="highlightLinksToggle" />
                </div>
            </div>
            <div class="setting-item">
                <div class="setting-label">
                    <i class="bi bi-type-h1"></i> Sorot Judul
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="highlightHeadingsToggle" />
                </div>
            </div>
        </div>
        <div class="panel-footer p-3 border-top">
            <button class="btn btn-secondary w-100" id="resetAccessibility">
                Reset Pengaturan
            </button>
            <button class="btn w-100 mt-2 close-setting text-white" style="background-color: #02ab5a">
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