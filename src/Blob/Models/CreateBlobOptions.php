<?php

/**
 * LICENSE: The MIT License (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * https://github.com/azure/azure-storage-php/LICENSE
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * PHP version 5
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @link      https://github.com/azure/azure-storage-php
 */
 
namespace MicrosoftAzure\Storage\Blob\Models;

use MicrosoftAzure\Storage\Common\Internal\Validate;

/**
 * optional parameters for createXXXBlob wrapper
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @link      https://github.com/azure/azure-storage-php
 */
class CreateBlobOptions extends BlobServiceOptions
{
    private $_contentType;
    private $_contentEncoding;
    private $_contentLanguage;
    private $_contentMD5;
    private $_cacheControl;
    private $_blobContentType;
    private $_blobContentEncoding;
    private $_blobContentLanguage;
    private $_blobContentLength;
    private $_blobContentMD5;
    private $_blobCacheControl;
    private $_metadata;
    private $_sequenceNumber;
    private $_sequenceNumberAction;
    private $_numberOfConcurrency;
    
    /**
     * Gets blob ContentType.
     *
     * @return string
     */
    public function getBlobContentType()
    {
        return $this->_blobContentType;
    }

    /**
     * Sets blob ContentType.
     *
     * @param string $blobContentType value.
     *
     * @return void
     */
    public function setBlobContentType($blobContentType)
    {
        $this->_blobContentType = $blobContentType;
    }
    
    /**
     * Gets blob ContentEncoding.
     *
     * @return string
     */
    public function getBlobContentEncoding()
    {
        return $this->_blobContentEncoding;
    }

    /**
     * Sets blob ContentEncoding.
     *
     * @param string $blobContentEncoding value.
     *
     * @return void
     */
    public function setBlobContentEncoding($blobContentEncoding)
    {
        $this->_blobContentEncoding = $blobContentEncoding;
    }
    
    /**
     * Gets blob ContentLanguage.
     *
     * @return string
     */
    public function getBlobContentLanguage()
    {
        return $this->_blobContentLanguage;
    }

    /**
     * Sets blob ContentLanguage.
     *
     * @param string $blobContentLanguage value.
     *
     * @return void
     */
    public function setBlobContentLanguage($blobContentLanguage)
    {
        $this->_blobContentLanguage = $blobContentLanguage;
    }
    
    /**
     * Gets blob ContentLength.
     *
     * @return integer
     */
    public function getBlobContentLength()
    {
        return $this->_blobContentLength;
    }

    /**
     * Sets blob ContentLength.
     *
     * @param integer $blobContentLength value.
     *
     * @return void
     */
    public function setBlobContentLength($blobContentLength)
    {
        Validate::isInteger($blobContentLength, 'blobContentLength');
        $this->_blobContentLength = $blobContentLength;
    }

    /**
     * Gets blob ContentMD5.
     *
     * @return string
     */
    public function getBlobContentMD5()
    {
        return $this->_blobContentMD5;
    }

    /**
     * Sets blob ContentMD5.
     *
     * @param string $blobContentMD5 value.
     *
     * @return void
     */
    public function setBlobContentMD5($blobContentMD5)
    {
        $this->_blobContentMD5 = $blobContentMD5;
    }
    
    /**
     * Gets blob cache control.
     *
     * @return string
     */
    public function getBlobCacheControl()
    {
        return $this->_blobCacheControl;
    }
    
    /**
     * Sets blob cacheControl.
     *
     * @param string $blobCacheControl value to use.
     *
     * @return void
     */
    public function setBlobCacheControl($blobCacheControl)
    {
        $this->_blobCacheControl = $blobCacheControl;
    }
    
    /**
     * Gets blob contentType.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->_contentType;
    }

    /**
     * Sets blob contentType.
     *
     * @param string $contentType value.
     *
     * @return void
     */
    public function setContentType($contentType)
    {
        $this->_contentType = $contentType;
    }
    
    /**
     * Gets contentEncoding.
     *
     * @return string
     */
    public function getContentEncoding()
    {
        return $this->_contentEncoding;
    }

    /**
     * Sets contentEncoding.
     *
     * @param string $contentEncoding value.
     *
     * @return void
     */
    public function setContentEncoding($contentEncoding)
    {
        $this->_contentEncoding = $contentEncoding;
    }
    
    /**
     * Gets contentLanguage.
     *
     * @return string
     */
    public function getContentLanguage()
    {
        return $this->_contentLanguage;
    }

    /**
     * Sets contentLanguage.
     *
     * @param string $contentLanguage value.
     *
     * @return void
     */
    public function setContentLanguage($contentLanguage)
    {
        $this->_contentLanguage = $contentLanguage;
    }
    
    /**
     * Gets contentMD5.
     *
     * @return string
     */
    public function getContentMD5()
    {
        return $this->_contentMD5;
    }

    /**
     * Sets contentMD5.
     *
     * @param string $contentMD5 value.
     *
     * @return void
     */
    public function setContentMD5($contentMD5)
    {
        $this->_contentMD5 = $contentMD5;
    }
    
    /**
     * Gets cacheControl.
     *
     * @return string
     */
    public function getCacheControl()
    {
        return $this->_cacheControl;
    }
    
    /**
     * Sets cacheControl.
     *
     * @param string $cacheControl value to use.
     *
     * @return void
     */
    public function setCacheControl($cacheControl)
    {
        $this->_cacheControl = $cacheControl;
    }
    
    /**
     * Gets blob metadata.
     *
     * @return array
     */
    public function getMetadata()
    {
        return $this->_metadata;
    }

    /**
     * Sets blob metadata.
     *
     * @param array $metadata value.
     *
     * @return void
     */
    public function setMetadata(array $metadata)
    {
        $this->_metadata = $metadata;
    }
    
    /**
     * Gets blob sequenceNumber.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->_sequenceNumber;
    }

    /**
     * Sets blob sequenceNumber.
     *
     * @param int $sequenceNumber value.
     *
     * @return void
     */
    public function setSequenceNumber($sequenceNumber)
    {
        Validate::isInteger($sequenceNumber, 'sequenceNumber');
        $this->_sequenceNumber = $sequenceNumber;
    }
    
    /**
     * Gets blob sequenceNumberAction.
     *
     * @return string
     */
    public function getSequenceNumberAction()
    {
        return $this->_sequenceNumberAction;
    }

    /**
     * Sets blob sequenceNumberAction.
     *
     * @param string $sequenceNumberAction value.
     *
     * @return void
     */
    public function setSequenceNumberAction($sequenceNumberAction)
    {
        $this->_sequenceNumberAction = $sequenceNumberAction;
    }

    /**
     * Gets number of concurrency for sending a blob.
     *
     * @return int
     */
    public function getNumberOfConcurrency()
    {
        return $this->_numberOfConcurrency;
    }

    /**
     * Sets number of concurrency for sending a blob.
     *
     * @param int $numberOfConcurrency the number of concurrent requests.
     */
    public function setNumberOfConcurrency($numberOfConcurrency)
    {
        $this->_numberOfConcurrency = $numberOfConcurrency;
    }

    /**
     * Construct a CreateBlobOptions object from a createBlockBlobOptions.
     *
     * @param  CreateBlobBlockOptions $createBlobBlockOptions
     *
     * @return CreateBlobOptions
     */
    public static function create(CreateBlobBlockOptions $createBlobBlockOptions)
    {
        $result = new CreateBlobOptions();
        $result->setTimeout($createBlobBlockOptions->getTimeout());
        $result->setContentMD5($createBlobBlockOptions->getContentMD5());
        $result->setLeaseId($createBlobBlockOptions->getLeaseId());
        $result->setLeaseId($createBlobBlockOptions->getAccessCondition());
        $result->setNumberOfConcurrency(
            $createBlobBlockOptions->getNumberOfConcurrency()
        );
        return $result;
    }
}
