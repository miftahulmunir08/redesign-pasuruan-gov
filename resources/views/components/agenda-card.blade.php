@props(['agenda'])

<div class="agenda-card shadow-sm rounded-4 overflow-hidden h-100 d-flex flex-column">
    <img src="{{ $agenda->gambar_agenda ?? 'https://placehold.co/600x300/198754/FFFFFF?text=Info+Acara' }}"
        alt="{{ $agenda->judul_agenda }}" class="card-img-top" style="height: 12rem; object-fit: cover;">

    <div class="card-body d-flex flex-column p-4">
        <h5 class="fw-bold mb-2">{{ $agenda->judul_agenda }}</h5>
        <div class="mt-auto">
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item d-flex align-items-center">
                    <i class="bi bi-calendar-event fs-5 me-3"></i>
                    <div>
                        <h6 class="mb-0 text-muted" style="font-size: 0.8rem;">JADWAL</h6>
                        <span class="fw-light">
                            {{ dateFormatToID($agenda->waktu_mulai) }} -
                            {{ dateFormatToID($agenda->waktu_akhir) }}
                        </span>
                    </div>
                </li>
                <li class="list-group-item d-flex align-items-center mt-2">
                    <i class="bi bi-geo-alt-fill fs-5 me-3"></i>
                    <div>
                        <h6 class="mb-0 text-muted" style="font-size: 0.8rem;">LOKASI</h6>
                        <span class="fw-light">{{ $agenda->lokasi }}</span>
                    </div>
                </li>
            </ul>

            <button class="btn btn-success w-100 py-2 fw-bold text-white open-modal-btn"
                data-title="{{ $agenda->judul_agenda }}"
                data-date="{{ dateFormatToID($agenda->waktu_mulai) }} - {{ dateFormatToID($agenda->waktu_akhir) }}"
                data-location="{{ $agenda->lokasi }}"
                data-description="{{ $agenda->deskripsi ?? 'Tidak ada deskripsi' }}">
                LIHAT DETAIL
            </button>
        </div>
    </div>
</div>

@push('styles')
    @once
        <style>
            .agenda-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .agenda-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1) !important;
            }
        </style>
    @endonce
@endpush
