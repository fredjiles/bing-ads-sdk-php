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
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.100).aspx GetBulkUploadUrl Request Object
     * 
     * @uses ResponseMode
     * @used-by BingAdsBulkService::GetBulkUploadUrl
     */
final class GetBulkUploadUrlRequest
{
    /**
     * Specify whether to return errors and their corresponding data, or only the errors in the results file.
     * @var ResponseMode
     */
    public $ResponseMode;
    /**
     * The account identifier corresponding to the data that will be uploaded.
     * @var integer
     */
    public $AccountId;
}
