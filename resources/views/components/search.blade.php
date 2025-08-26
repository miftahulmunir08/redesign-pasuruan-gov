<style>
    body {
        font-family: "Poppins", sans-serif;
    }

    /* Custom green color similar to the original */
    .bg-custom-green {
        background-color: #0b7642;
    }

    .text-custom-green {
        color: #0b7642;
    }

    .border-custom-green {
        border-color: #0b7642 !important;
    }

    .btn-custom-green {
        background-color: #0b7642;
        color: white;
    }

    .btn-custom-green:hover {
        background-color: #0a6337;
        color: white;
    }

    /* Custom hover effect from original design */
    .card-hover-scale:hover {
        transform: scale(1.02);
        transition: transform 0.3s ease-in-out;
    }

    .img-hover-scale:hover {
        transform: scale(1.05);
    }

    /* Video button hover effect */
    .btn-video-effect {
        position: relative;
        overflow: hidden;
        transition: color 0.3s ease-in-out;
        z-index: 1;
    }

    .btn-video-effect .btn-background {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 0;
        background-color: #0b7642;
        transition: width 0.3s ease-in-out;
        z-index: -1;
    }

    .btn-video-effect:hover {
        color: white;
    }

    .btn-video-effect:hover .btn-background {
        width: 100%;
    }
</style>

<div class="bg-white border-md-0 rounded-lg shadow p-3 position-relative z-2">
    <div class="input-group">
        <input name="search" type="search" placeholder="Keyword pencarian" class="form-control" />
        <button class="btn btn-custom-green d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-sm-1">
                <path d="m21 21-4.34-4.34" />
                <circle cx="11" cy="11" r="8" />
            </svg>
            <span class="d-none d-sm-inline">Cari</span>
        </button>
    </div>
</div>