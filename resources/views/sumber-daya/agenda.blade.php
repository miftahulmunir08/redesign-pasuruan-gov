@extends('layout')

@section('content')
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="fs-1 text-center text-white mb-3 p-0 fw-bold">
                {{ $devTitle }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    <section>
        {{-- LIST OF ITEM --}}
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($devData as $agenda)
                    <div class="col">
                        <x-agenda-card :agenda="$agenda" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- PAGINATION --}}
        <div class="my-4">
            <x-dummy-pagination />
        </div>
    </section>

    <div class="modal fade" id="agendaModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modalTitle" class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Jadwal:</strong> <span id="modalDate"></span></p>
                    <p><strong>Lokasi:</strong> <span id="modalLocation"></span></p>
                    <p id="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    @once
        <style>
            .modal.fade .modal-dialog {
                transform: translateY(-20px) scale(0.95);
                transition: transform 0.35s ease, opacity 0.35s ease;
                opacity: 0;
            }

            .modal.show .modal-dialog {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        </style>
    @endonce
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $(".open-modal-btn").on("click", function() {
                let title = $(this).data("title");
                let date = $(this).data("date");
                let location = $(this).data("location");
                let description = $(this).data("description");

                $("#modalTitle").text(title);
                $("#modalDate").text(date);
                $("#modalLocation").text(location);
                $("#modalDescription").text(description);

                $("#agendaModal").modal("show"); // Bootstrap 5
            });
        });
    </script>
@endpush
