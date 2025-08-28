<?php

use Illuminate\Http\Request;

if (!function_exists('generateSimpleBreadcrumbs')) {
    /**
     * Membuat breadcrumbs sederhana (Home > Halaman Terakhir).
     *
     * @param Request $request
     * @return array
     */
    function generateSimpleBreadcrumbs(Request $request): array
    {
        $segments = $request->segments();
        $breadcrumbs = [];

        if (count($segments) > 0) {
            $lastSegment = end($segments);
            // Format teks: ganti '-' dan '_' dengan spasi, lalu jadikan Title Case
            $text = ucwords(str_replace(['-', '_'], ' ', $lastSegment));

            $breadcrumbs[] = [
                'text' => $text,
                'url'  => null // Halaman terakhir tidak punya link
            ];
        }

        // Selalu tambahkan 'Home' di awal
        array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

        return $breadcrumbs;
    }
}
