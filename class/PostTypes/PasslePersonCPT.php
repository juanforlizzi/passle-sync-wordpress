<?php

namespace Passle\PassleSync\PostTypes;

use Passle\PassleSync\Models\Resources\PersonResource;
use Passle\PassleSync\Services\OptionsService;

class PasslePersonCpt extends CptBase
{
  const RESOURCE = PersonResource::class;

  protected static function get_cpt_args(): array
  {
    return [
      "menu_icon" => "dashicons-admin-users",
    ];
  }

  protected static function get_permalink_prefix(): string
  {
    return OptionsService::get()->person_permalink_prefix;
  }
}
