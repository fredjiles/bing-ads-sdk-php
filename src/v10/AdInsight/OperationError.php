<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace BingAds\v10\AdInsight;


/**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/mt219310(v=msads.100).aspx OperationError Data Object
     *
     * @used-by ApiFaultDetail
     */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var integer
     */
    public $Code;
    /**
     * A message that provides additional details about the error.
     * @var string
     */
    public $Details;
    /**
     * A symbolic string constant that identifies the error.
     * @var string
     */
    public $ErrorCode;
    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}
