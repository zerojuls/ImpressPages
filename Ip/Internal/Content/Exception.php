<?php
/**
 * @package ImpressPages
 *
 */

namespace Ip\Internal\Content;

/**
 * Exception class
 * @todo move to \Ip\Exception folder
 */
class Exception extends \Exception
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }


}
