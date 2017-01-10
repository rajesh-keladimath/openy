<?php

namespace Drupal\openy_socrates;

/**
 * Class OpenySocratesFacade.
 *
 * @package Drupal\openy_socrates
 *
 * @method mixed getLocationLongtitude(array $args)
 * @method mixed getLocationLatitude(array $args)
 *
 */
class OpenySocratesFacade {

  public function __call($name, $arguments) {
    switch ($name) {
      case 'getLocationLongtitude':
        return '50';

      case 'getLocationLatitude':
        return '30';
    }

    throw new OpenySocratesException(sprintf('Method %s not implemented yet.', $name));
  }
}