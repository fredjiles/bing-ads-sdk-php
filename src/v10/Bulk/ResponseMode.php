<?php
/*
 * File generated by ClassyFile <https://github.com/onema/classyfile>
 * (c) 2016, Juan Manuel Torres
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed
 * with this source code.
 */
namespace BingAds\v10\Bulk;


/**
     * Defines elements to specify whether the bulk service should return upload errors with their corresponding data.
     * @link http://msdn.microsoft.com/en-us/library/dn249983(v=msads.100).aspx ResponseMode Value Set
     * 
     * @used-by GetBulkUploadUrlRequest
     */
final class ResponseMode
{
    /** Return errors only in the bulk upload response file. */
    const ErrorsOnly = 'ErrorsOnly';
    /** Return errors and results in the bulk upload response file. */
    const ErrorsAndResults = 'ErrorsAndResults';
}
