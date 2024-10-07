<?php

namespace WPBannerize\CustomTaxonomyTypes;

use WPBannerize\WPBones\Foundation\WordPressCustomTaxonomyTypeServiceProvider as ServiceProvider;

class WPBannerizeCustomTaxonomyType extends ServiceProvider
{

    protected $id = 'wp_bannerize_tax';
    protected $name = 'Banner';
    protected $plural = 'Campaigns';
    protected $objectType = 'wp_bannerize';
    protected $queryVar = 'bannerize_category';
    protected $hierarchical = true;
    protected $showInRest = true;
    protected $showTagcloud = false;
    protected $showAdminColumn = true;
    protected $withFront = true;

    protected $labels = [
        'name' => 'Campaigns',
        'singular_name' => 'Banner Campaign',
        'menu_name' => 'Banner Campaigns',
        'name_admin_bar' => "Banner Campaign",
        'search_items' => 'Search Banner Campaigns',
        'popular_items' => "Popular Banner Campaigns",
        'all_items' => 'All Banner Campaigns',
        'edit_item' => 'Edit Banner Campaign',
        'view_item' => "View Banner campaign",
        'update_item' => 'Update Banner Campaign',
        'add_new_item' => 'Add New Banner Campaign',
        'new_item_name' => 'New Banner Campaign Name',
        'separate_items_with_commas' => "Separate Banner Cmpaigns with comas",
        'add_or_remove_items' => "Add or remove Banner Campaigns",
        'choose_from_most_used' => "Choose from the most used Banner Campaigns",
        'parent_item' => 'Parent Banner Campaign',
        'parent_item_colon' => 'Parent Banner Campaign:',
    ];

//    protected $capabilities = [
//        'manage_terms' => 'manage_campaigns',
//        'edit_terms' => 'edit_campaigns',
//        'delete_terms' => 'delete_campaigns',
//        'assign_terms' => 'assign_campaigns'
//    ];

    /**
     * You may override this method in order to register your own actions and filters.
     *
     */
    public function boot()
    {
        // You may override this method
    }
}
