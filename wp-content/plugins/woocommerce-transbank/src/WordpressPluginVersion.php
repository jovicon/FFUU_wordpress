<?php

namespace Transbank\Woocommerce\Webpay;

class WordpressPluginVersion
{
    protected function includeWordpressPluginFunctions()
    {
        // Mandar ping a cumbre
        if (!function_exists('get_plugin_data')) {
            require_once(ABSPATH . 'wp-admin/includes/plugin.php');
        }
    }
    
    public function get()
    {
        $this->includeWordpressPluginFunctions();
        $pluginData = get_plugin_data(dirname(__DIR__) . '/webpay.php');
        $pluginVersion = $pluginData['Version'];
    
        return $pluginVersion;
    }
}
