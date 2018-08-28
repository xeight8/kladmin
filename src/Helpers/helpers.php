<?php
if (!function_exists('kladmin_asset')) {
    function kladmin_asset($path, $secure = null)
    {
        return asset(config('kladmin.assets_path') . '/' . $path, $secure);
    }
}