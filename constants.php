<?php

function passle_constants($constant_name, $value)
{
    $constant_name_prefix = "PASSLESYNC_";
    $constant_name = $constant_name_prefix . $constant_name;
    if (!defined($constant_name))
        define($constant_name, $value);
}

passle_constants("REST_API_BASE", "passlesync/v1");
passle_constants("CLIENT_API_KEY", "passle_api_key");
passle_constants("PLUGIN_API_KEY", "passle_sync_api_key");
passle_constants("SHORTCODE", "passle_shortcode");
passle_constants("POST_PERMALINK_PREFIX", "post_permalink_prefix");
passle_constants("PERSON_PERMALINK_PREFIX", "person_permalink_prefix");
passle_constants("POST_TYPE", "passle-post");
passle_constants("AUTHOR_TYPE", "passle-author");
passle_constants("CLIENT_API_BASE", "clientwebapi.passle.localhost/api");
passle_constants("ASSET_MANIFEST", plugin_dir_path(__FILE__) . "/frontend/dist/asset-manifest.json");
