<?php

namespace Passle\PassleSync\Services;

class EmbedService
{
  public static function init()
  {
    add_action("wp_enqueue_scripts", [self::class, "enqueue_scripts"]);
  }

  public static function enqueue_scripts()
  {
    wp_register_script(
      "passle-remote-hosting-bundle",
      "https://clientweb.passle." . PASSLESYNC_DOMAIN_EXT . "/v1/RemoteHostingBundle",
      ["jquery"],
      false,
      true
    );

    wp_enqueue_script("passle-remote-hosting-bundle");
  }
}
