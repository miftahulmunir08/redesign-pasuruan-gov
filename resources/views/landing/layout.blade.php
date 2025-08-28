<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Slick CSS --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
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

        .background-div-2 {
            width: 100%;
            height: 40vh;
            background: linear-gradient(135deg,
                rgba(2, 171, 90, 0.8),
                rgba(70, 192, 87, 0.8)),
            url("{{ asset('storage/uploads/hero/202409_205-66d55924c94eb.jpg') }}");
            /* path gambar */

            background-size: cover;
            /* biar full */
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
            background-color: #ffc107 !important;
            /* Bootstrap warning (yellow) */
            color: #02ab5a !important;
            /* hijau */
            transform: translateY(-5px);
            /* naik ke atas */
            box-shadow: 0px 4px 24px 0px rgb(212, 235, 6) !important;
        }

        .bg-green-icon:hover+.title-icon {
            color: #ffc107 !important;
            /* hijau */
            transform: translateY(-5px);
            /* naik ke atas */
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
            background: linear-gradient(120deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.5) 50%,
                    rgba(255, 255, 255, 0) 100%);
            transform: skewX(-25deg);
            animation: shine 2s ease-in-out infinite;
            /* jalan terus */
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
            transform: rotate(-45deg);
            /* serong kanan atas */
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
            position: fixed;
            /* atau absolute kalau hanya untuk section tertentu */
            top: 0;
            left: 0;
            width: 100vw;
            height: 100%;
            z-index: -1;
            /* biar di belakang konten */
            overflow: hidden;
        }

        .video-bg iframe {
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            /* biar nggak bisa diklik */
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



        .pagination .page-link {
            border: 1px solid #198754;
            /* border hijau */
            color: #198754;
            /* teks hijau */
        }

        .pagination .page-link:hover {
            background-color: #198754;
            /* hover hijau */
            color: #fff;
            /* teks putih */
        }

        .pagination .page-item.active .page-link {
            background-color: #198754;
            /* halaman aktif hijau */
            border-color: #198754;
            color: #fff;
        }

        /* Ganti warna default nav-pills active */
        .nav-pills .nav-link.active {
            background-color: #198754 !important;
            /* Bootstrap success green */
            color: #fff !important;
        }

        /* Kalau mau hover state juga ikut hijau */
        .nav-pills .nav-link {
            color: #198754;
        }

        .nav-pills .nav-link:hover {
            background-color: #157347;
            color: #fff;
        }
    </style>

    @stack('styles')
</head>

<body>
    {{-- Header --}}
    <header>

    </header>

    @yield('content')

    {{-- Footer --}}



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
            setTimeout(function() {
                window.location.href = url;
            }, 2000);
        }

        $(document).ready(function() {
            $("#accessibility-handle").click(function() {
                $("#accessibility-panel").toggleClass("show");
                $("#overlay").fadeToggle();
            });

            // klik X atau overlay untuk menutup
            $("#close-panel, #overlay").click(function(e) {
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

            $("#youtubeModal").on("shown.bs.modal", function() {
                $("#youtubeFrame").attr("src", videoSrc);
            });

            $("#youtubeModal").on("hidden.bs.modal", function() {
                $("#youtubeFrame").attr("src", ""); // stop video
            });

            $("#floatingInputGroup1").keypress(function(e) {
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
                    $(document).on("mouseenter", readableElements, function() {
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

            $("#modeSuaraToggle").on("change", function() {
                settings.modeSuara = $(this).is(":checked");
                toggleTTSEvents(settings.modeSuara);
                saveSettings();
            });

            // 2. Font Disleksia
            $("#fontDisleksiaToggle").on("change", function() {
                settings.fontDisleksia = $(this).is(":checked");
                body.toggleClass("dyslexia-font", settings.fontDisleksia);
                saveSettings();
            });

            // 3. Pertebal Huruf
            $("#boldTextToggle").on("change", function() {
                settings.boldText = $(this).is(":checked");
                body.toggleClass("bold-text", settings.boldText);
                saveSettings();
            });

            // 4. Sorot Tautan & Judul
            $("#highlightLinksToggle").on("change", function() {
                settings.highlightLinks = $(this).is(":checked");
                body.toggleClass("highlight-links", settings.highlightLinks);
                saveSettings();
            });
            $("#highlightHeadingsToggle").on("change", function() {
                settings.highlightHeadings = $(this).is(":checked");
                body.toggleClass("highlight-headings", settings.highlightHeadings);
                saveSettings();
            });

            // 5. Ukuran Teks
            $("#increaseText").on("click", function() {
                if (settings.textSize < 200) {
                    settings.textSize += 10;
                    applySettings();
                    saveSettings();
                }
            });
            $("#decreaseText").on("click", function() {
                if (settings.textSize > 50) {
                    settings.textSize -= 10;
                    applySettings();
                    saveSettings();
                }
            });

            // 6. Tinggi Baris
            $("#lineHeightGroup .btn").on("click", function() {
                settings.lineHeight = $(this).data("value");
                applySettings();
                saveSettings();
            });

            // 7. Rata Tulisan
            $("#textAlignGroup .btn").on("click", function() {
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