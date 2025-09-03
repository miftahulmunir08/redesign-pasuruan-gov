@props(['title', 'extension', 'url' => '#'])

@php
    $ext = strtolower($extension);
    $iconClass = '';
    $iconAwesome = '';
    $badgeBgClass = '';
    $badgeTextClass = '';

    switch ($ext) {
        case 'pdf':
            $iconClass = 'icon-pdf';
            $iconAwesome = 'fas fa-file-pdf';
            $badgeBgClass = 'bg-danger-subtle';
            $badgeTextClass = 'text-danger-emphasis';
            break;
        case 'zip':
            $iconClass = 'icon-zip';
            $iconAwesome = 'fas fa-file-archive';
            $badgeBgClass = 'bg-warning-subtle';
            $badgeTextClass = 'text-warning-emphasis';
            break;
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'svg':
            $iconClass = 'icon-img';
            $iconAwesome = 'fas fa-image';
            $badgeBgClass = 'bg-primary-subtle';
            $badgeTextClass = 'text-primary-emphasis';
            break;
        case 'mp3':
        case 'wav':
        case 'ogg':
            $iconClass = 'icon-music';
            $iconAwesome = 'fas fa-music';
            $badgeBgClass = 'bg-success-subtle';
            $badgeTextClass = 'text-success-emphasis';
            break;
        default:
            $iconClass = 'icon-default';
            $iconAwesome = 'fas fa-file';
            $badgeBgClass = 'bg-secondary-subtle';
            $badgeTextClass = 'text-secondary-emphasis';
            break;
    }
@endphp

<div class="col">
    <div class="download-item-card p-3 p-md-4 border rounded h-100">
        <div class="d-flex flex-column flex-md-row align-items-center">
            <div class="d-flex align-items-center mb-3 mb-md-0 flex-grow-1">
                <div class="file-icon {{ $iconClass }} me-3">
                    <i class="{{ $iconAwesome }}"></i>
                </div>
                <div class="w-100 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center">
                    <h5 class="item-title mb-1 mb-sm-0">{{ $title }}</h5>
                    <span
                        class="badge {{ $badgeBgClass }} {{ $badgeTextClass }} extension-badge ms-sm-3">{{ strtoupper($extension) }}</span>
                </div>
            </div>
            <div class="ms-md-auto mt-3 mt-md-0 ps-md-4">
                <a href="{{ $url }}" class="btn btn-secondary download-button px-4">
                    <i class="fas fa-download me-2"></i>Unduh
                </a>
            </div>
        </div>
    </div>
</div>
