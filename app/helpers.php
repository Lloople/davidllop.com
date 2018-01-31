<?php

if (!function_exists('sri')) {
    function sri(string $path): string
    {
        try {
            $fileContent = Storage::disk('assets')->get($path);
        } catch (Exception $e) {
            dd($e);
        }

        $hash = hash('sha256', $fileContent, true);
        $base64Hash = base64_encode($hash);

        return "sha256-{$base64Hash}";
    }
}
