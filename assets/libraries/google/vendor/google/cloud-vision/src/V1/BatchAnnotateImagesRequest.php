<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Multiple image annotation requests are batched into a single service call.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.BatchAnnotateImagesRequest</code>
 */
class BatchAnnotateImagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageRequest requests = 1;</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\AnnotateImageRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Individual image annotation requests for this batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageRequest requests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageRequest requests = 1;</code>
     * @param \Google\Cloud\Vision\V1\AnnotateImageRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\AnnotateImageRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

