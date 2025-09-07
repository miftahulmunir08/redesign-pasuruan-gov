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

if (!function_exists('generateParentBreadcrumb')) {
    function generateParentBreadcrumb(Request $request): array
    {
        $segments = $request->segments();
        $breadcrumbs = [];
        $titleSegment = null;
        $path = '';

        if (count($segments) >= 2) {
            $titleSegment = $segments[count($segments) - 2];
            $path = '/' . implode('/', array_slice($segments, 0, count($segments) - 1));
        } elseif (count($segments) === 1) {
            $titleSegment = $segments[0];
            $path = '/' . $segments[0];
        }

        if ($titleSegment) {
            $breadcrumbs[] = [
                'text' => ucwords(str_replace(['-', '_'], ' ', $titleSegment)),
                'url'  => $path
            ];
        }

        array_unshift($breadcrumbs, ['text' => 'Home', 'url' => '/']);

        return $breadcrumbs;
    }
}

if (!function_exists('dateFormatToID')) {
    function dateFormatToID($date)
    {
        if (!$date) return null;

        return Carbon::parse($date)->translatedFormat('d F Y');
    }
}
