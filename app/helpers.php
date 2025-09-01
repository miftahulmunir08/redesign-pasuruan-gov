<?php

use Illuminate\Http\Request;
use Carbon\Carbon;

if (!function_exists('generateSimpleBreadcrumbs')) {
    function generateSimpleBreadcrumbs(Request $request): array
    {
        $segments = $request->segments();
        $breadcrumbs = [];

        if (count($segments) > 0) {
            $lastSegment = end($segments);
            $text = ucwords(str_replace(['-', '_'], ' ', $lastSegment));

            $breadcrumbs[] = [
                'text' => $text,
                'url'  => null
            ];
        }

        array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

        return $breadcrumbs;
    }
}

if (!function_exists('formatTanggalIndo')) {
    function dateFormatToID($date)
    {
        if (!$date) return null;

        return Carbon::parse($date)->translatedFormat('d F Y');
    }
}
