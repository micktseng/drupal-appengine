<?php

/**
 * @file
 * Definition of Drupal\views\Plugins\views\argument_validator\Numeric.
 */

namespace Drupal\views\Plugins\views\argument_validator;

use Drupal\Core\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Validate whether an argument is numeric or not.
 *
 * @ingroup views_argument_validate_plugins
 */

/**
 * @Plugin(
 *   plugin_id = "numeric",
 *   title = @Translation("Numeric")
 * )
 */
class Numeric extends ArgumentValidatorPluginBase {
  function validate_argument($argument) {
    return is_numeric($argument);
  }
}
