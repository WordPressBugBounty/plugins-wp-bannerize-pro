<?php

namespace WPBannerize\Http\Controllers;

class WPBannerizeAnalyticsController extends Controller
{
    public function index()
    {
        return WPBannerize()
            ->view('analytics.index')
            ->withLocalizeScripts('analytics/analytics', 'WPBannerize', [
                'nonce' => wp_create_nonce('wp-bannerize-pro'),
                'version' => WPBannerize()->Version,
                'preferences' => WPBannerize()->options->toArray(),
                'health' => wp_create_nonce('wp_rest'),
                'manage_analytics' => current_user_can('manage_analytics'),
            ])
            ->withAdminAppsScripts('analytics/analytics', true);
    }
}
