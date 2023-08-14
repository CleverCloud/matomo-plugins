<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateCustomMetric RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateCustomMetricRequest</code>
 */
class UpdateCustomMetricRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     */
    private $custom_metric = null;
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\CustomMetric $custom_metric
     *           The CustomMetric to update
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Omitted fields will not be
     *           updated. To replace the entire entity, use one path with the string "*" to
     *           match all fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomMetric|null
     */
    public function getCustomMetric()
    {
        return $this->custom_metric;
    }

    public function hasCustomMetric()
    {
        return isset($this->custom_metric);
    }

    public function clearCustomMetric()
    {
        unset($this->custom_metric);
    }

    /**
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomMetric $var
     * @return $this
     */
    public function setCustomMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomMetric::class);
        $this->custom_metric = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

