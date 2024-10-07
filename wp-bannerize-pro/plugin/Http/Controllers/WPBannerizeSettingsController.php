<?php

namespace WPBannerize\Http\Controllers;

use WPBannerize\Http\Controllers\Controller;

class WPBannerizeSettingsController extends Controller
{

  public function index()
  {
    return WPBannerize()
      ->view('settings.index')
      ->withLocalizeScripts('settings/settings', 'WPBannerize', [
        'nonce' => wp_create_nonce('wp-bannerize-pro'),
        'version' => WPBannerize()->Version,
        'options' => WPBannerize()->options->toArray(),
        'health' => wp_create_nonce('wp_rest'),
      ])
      ->withAdminAppsScripts('settings/settings', true);
  }
}
