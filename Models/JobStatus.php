<?php
/**
 * Orange Management
 *
 * PHP Version 7.1
 *
 * @category   TBD
 * @package    TBD
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://orange-management.com
 */
declare(strict_types = 1);
namespace Modules\Job\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Task status enum.
 *
 * @category   Job
 * @package    Modules
 * @license    OMS License 1.0
 * @link       http://orange-management.com
 * @since      1.0.0
 */
abstract class JobStatus extends Enum
{
    /* public */ const RUNNING = 1;
    /* public */ const WAITING = 2;
    /* public */ const SUSPENDED = 3;
    /* public */ const DONE = 4;
}
