<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        .custom-card {
            border: 1px solid #e0e0e0;
            border-radius: 0.5rem;
            overflow: hidden;
            background-color: white;
            transition: all 0.3s ease-in-out;
        }

        .custom-card:hover {
            border: 2px solid #0B7642;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(11, 118, 66, 0.1);
        }

        #pagination-container {
            font-family: 'Poppins', sans-serif;
        }

        #pagination-container .dataTables_paginate {
            margin: 0;
        }

        #pagination-container .dataTables_paginate>ul {
            margin: 0;
        }

        .dataTables_paginate .page-link {
            border-radius: 0.375rem !important;
            margin: 0 4px;
            border: 1px solid #dee2e6;
            color: #0B7642;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .dataTables_paginate .page-link:focus {
            box-shadow: none;
        }

        .dataTables_paginate .page-link:hover {
            background-color: #f4f4f4;
            border-color: #c0c0c0;
        }

        .dataTables_paginate .page-item.active .page-link {
            background-color: #0B7642;
            border-color: #0B7642;
            color: #fff;
            font-weight: 600;
        }

        .dataTables_paginate .page-item.disabled .page-link {
            background-color: #e9ecef;
            color: #adb5bd;
        }

        #pagination-container .dataTables_info {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .badge {
            font-size: 0.8rem;
            padding: 0.5em 1.5em;
        }
    </style>
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: 480px; background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white; font-weight: bold; margin-bottom: 8px; padding: 0" class="fs-1">
                Lembaga Legislatif
            </h1>
            <?php if(isset($breadcrumbs)): ?>
                <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="container my-4">
        <div class="row mb-4 align-items-end">
            
            <div class="col-md-8 mb-2 mb-md-0">
                <label for="custom-search-input" class="form-label fw-bold mb-1">Cari Anggota</label>
                <input type="text" id="custom-search-input" class="form-control form-control-lg"
                    placeholder="Ketik nama atau jabatan...">
            </div>

            
            <div class="col-md-4">
                <div id="length-menu-container">
                </div>
            </div>
        </div>

        <div id="anggota-list" class="d-flex flex-column gap-3">
        </div>

        <div id="pagination-container"
            class="mt-4 d-flex flex-column flex-md-row justify-content-md-between align-items-center gap-3">
        </div>

        
        <div id="anggota-template" style="display: none;">
            <div class="card custom-card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-2 p-4 d-flex justify-content-center">
                        <img src="" class="img-fluid rounded item-foto" alt="Foto Anggota"
                            style="object-fit: cover; width: 80%">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title item-nama mb-1">Nama Anggota</h5>
                            <div class="mb-2 d-flex flex-column flex-md-row">
                                <span class="badge item-nama-lembaga rounded-pill mb-1 mb-md-0"
                                    style="background-color: #0B7642">Nama
                                    Lembaga</span>
                                <span class="badge item-jabatan ms-md-1 rounded-pill"
                                    style="background-color: #6c757d">Jabatan</span>
                            </div>
                            <p class="card-text item-riwayat text-secondary" style="font-size: 0.9rem;">
                                <strong class="text-dark">Biografi:</strong> Isi biografi singkat...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table id="datatable-dummy" class="d-none"></table>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        // Data Dummy
        const dummyData = [{
                "id": 233,
                "nama": "Samsul Hidayat",
                "jabatan": "Ketua DPRD",
                "nama_lembaga": "Pimpinan Dewan",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Lahir di Pasuruan, berpengalaman dalam bidang legislatif selama lebih dari 10 tahun."
            },
            {
                "id": 234,
                "nama": "Rias Yudikari Drastika, S.H",
                "jabatan": "Wakil Ketua DPRD",
                "nama_lembaga": "Pimpinan Dewan",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Seorang advokat yang kini mengabdikan diri di parlemen untuk menyuarakan aspirasi rakyat."
            },
            {
                "id": 235,
                "nama": "Budi Santoso",
                "jabatan": "Anggota Komisi A",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Fokus pada pengembangan infrastruktur dan tata kota untuk kemajuan daerah."
            },
            {
                "id": 236,
                "nama": "Siti Aminah",
                "jabatan": "Anggota Komisi B",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Memperjuangkan isu-isu pendidikan dan kesehatan bagi masyarakat kurang mampu."
            },
            {
                "id": 237,
                "nama": "Joko Susilo",
                "jabatan": "Anggota Komisi C",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Aktif dalam program pemberdayaan ekonomi kreatif dan UMKM di tingkat lokal."
            },
            {
                "id": 238,
                "nama": "Ahmad Fauzi",
                "jabatan": "Anggota Komisi D",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Mengawasi bidang kesejahteraan sosial dan ketenagakerjaan di Kabupaten Pasuruan."
            },
            {
                "id": 239,
                "nama": "Dewi Lestari",
                "jabatan": "Anggota Komisi A",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Berkomitmen untuk meningkatkan transparansi dan akuntabilitas dalam pemerintahan."
            },
            {
                "id": 240,
                "nama": "Eko Prasetyo",
                "jabatan": "Anggota Komisi B",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Mendorong inovasi di sektor pertanian dan perikanan untuk meningkatkan pendapatan petani."
            },
            {
                "id": 241,
                "nama": "Putri Wulandari",
                "jabatan": "Anggota Komisi C",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Pemerhati lingkungan yang aktif mengusulkan kebijakan pembangunan berkelanjutan."
            },
            {
                "id": 242,
                "nama": "Hendra Gunawan",
                "jabatan": "Anggota Komisi D",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Memiliki latar belakang di bidang hukum dan fokus pada pembuatan peraturan daerah."
            },
            {
                "id": 243,
                "nama": "Mega Utami",
                "jabatan": "Anggota Komisi A",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Menjembatani komunikasi antara pemerintah daerah dengan organisasi masyarakat sipil."
            },
            {
                "id": 244,
                "nama": "Rizky Pratama",
                "jabatan": "Anggota Komisi B",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Seorang pengusaha muda yang membawa perspektif ekonomi modern ke dalam dewan."
            },
            {
                "id": 245,
                "nama": "Andi Wijaya",
                "jabatan": "Anggota Komisi C",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Berpengalaman dalam manajemen proyek dan mengawasi proyek-proyek pembangunan strategis."
            },
            {
                "id": 246,
                "nama": "Linda Sari",
                "jabatan": "Anggota Komisi D",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Fokus pada program perlindungan anak dan pemberdayaan perempuan di daerah."
            },
            {
                "id": 247,
                "nama": "Adi Nugroho",
                "jabatan": "Anggota Komisi A",
                "nama_lembaga": "Dewan Perwakilan Rakyat Daerah",
                "periode": "2024-2029",
                "foto_url": "https://placehold.co/1706x2560/EFEFEF/333333?text=Foto",
                "riwayat_pendidikan": "Mendorong digitalisasi layanan publik untuk mempermudah akses bagi masyarakat."
            }
        ];

        $(document).ready(function() {
            var datatable = $('#datatable-dummy').DataTable({
                data: dummyData,
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'nama'
                    },
                    {
                        data: 'jabatan'
                    },
                    {
                        data: 'nama_lembaga'
                    },
                    {
                        data: 'periode'
                    },
                    {
                        data: 'foto_url'
                    },
                    {
                        data: 'riwayat_pendidikan'
                    }
                ],
                dom: 'lipt',
                language: {
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ anggota legislatif",
                    "lengthMenu": "Jumlah data per halaman _MENU_"
                },
                drawCallback: function(settings) {
                    var api = this.api();
                    var data = api.rows({
                        page: 'current'
                    }).data();

                    $('#anggota-list').html('');

                    data.each(function(item) {
                        var template = $('#anggota-template > div').clone();

                        template.find('.item-foto').attr('src', item.foto_url);
                        template.find('.item-nama').text(item.nama);
                        template.find('.item-nama-lembaga').text(item.nama_lembaga);
                        template.find('.item-jabatan').text(item.jabatan);
                        template.find('.item-periode').text(item.periode);
                        template.find('.item-riwayat').text(item.riwayat_pendidikan);

                        var collapseId = 'collapse-' + item.id;
                        template.find('.accordion-button').attr('data-bs-target', '#' +
                            collapseId);
                        template.find('.accordion-collapse').attr('id', collapseId);

                        $('#anggota-list').append(template);
                    });
                }
            });

            $('.dataTables_info').appendTo('#pagination-container');
            $('.dataTables_paginate').appendTo('#pagination-container');

            /* search functionality */
            $('#custom-search-input').on('keyup', function() {
                datatable.search(this.value).draw();
            });

            /* entries number functionality */
            var lengthMenuWrapper = $('.dataTables_length');

            var label = lengthMenuWrapper.find('label');
            var select = lengthMenuWrapper.find('select');

            select.detach();

            label.text('Jumlah data per halaman');

            label.addClass('form-label fw-bold mb-1');
            select.addClass('form-select form-select-lg');

            lengthMenuWrapper.empty().append(label).append(select);
            lengthMenuWrapper.appendTo('#length-menu-container');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('pemerintahan.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/pemerintahan/legislatif.blade.php ENDPATH**/ ?>