<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/access_report.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Alpha;

class AccessReport
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
2google/analytics/admin/v1alpha/access_report.protogoogle.analytics.admin.v1alpha")
AccessDimension
dimension_name (	"#
AccessMetric
metric_name (	"7
AccessDateRange

start_date (	
end_date (	"�
AccessFilterExpressionO
	and_group (2:.google.analytics.admin.v1alpha.AccessFilterExpressionListH N
or_group (2:.google.analytics.admin.v1alpha.AccessFilterExpressionListH P
not_expression (26.google.analytics.admin.v1alpha.AccessFilterExpressionH E
access_filter (2,.google.analytics.admin.v1alpha.AccessFilterH B
one_expression"i
AccessFilterExpressionListK
expressions (26.google.analytics.admin.v1alpha.AccessFilterExpression"�
AccessFilterK
string_filter (22.google.analytics.admin.v1alpha.AccessStringFilterH L
in_list_filter (22.google.analytics.admin.v1alpha.AccessInListFilterH M
numeric_filter (23.google.analytics.admin.v1alpha.AccessNumericFilterH M
between_filter (23.google.analytics.admin.v1alpha.AccessBetweenFilterH 

field_name (	B

one_filter"�
AccessStringFilterP

match_type (2<.google.analytics.admin.v1alpha.AccessStringFilter.MatchType
value (	
case_sensitive ("�
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP
PARTIAL_REGEXP"<
AccessInListFilter
values (	
case_sensitive ("�
AccessNumericFilterP
	operation (2=.google.analytics.admin.v1alpha.AccessNumericFilter.Operation;
value (2,.google.analytics.admin.v1alpha.NumericValue"�
	Operation
OPERATION_UNSPECIFIED 	
EQUAL
	LESS_THAN
LESS_THAN_OR_EQUAL
GREATER_THAN
GREATER_THAN_OR_EQUAL"�
AccessBetweenFilter@

from_value (2,.google.analytics.admin.v1alpha.NumericValue>
to_value (2,.google.analytics.admin.v1alpha.NumericValue"J
NumericValue
int64_value (H 
double_value (H B
	one_value"�
AccessOrderByM
metric (2;.google.analytics.admin.v1alpha.AccessOrderBy.MetricOrderByH S
	dimension (2>.google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderByH 
desc ($
MetricOrderBy
metric_name (	�
DimensionOrderBy
dimension_name (	\\

order_type (2H.google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderBy.OrderType"i
	OrderType
ORDER_TYPE_UNSPECIFIED 
ALPHANUMERIC!
CASE_INSENSITIVE_ALPHANUMERIC
NUMERICB
one_order_by"/
AccessDimensionHeader
dimension_name (	")
AccessMetricHeader
metric_name (	"�
	AccessRowN
dimension_values (24.google.analytics.admin.v1alpha.AccessDimensionValueH
metric_values (21.google.analytics.admin.v1alpha.AccessMetricValue"%
AccessDimensionValue
value (	""
AccessMetricValue
value (	"�
AccessQuotaI
tokens_per_day (21.google.analytics.admin.v1alpha.AccessQuotaStatusJ
tokens_per_hour (21.google.analytics.admin.v1alpha.AccessQuotaStatusN
concurrent_requests (21.google.analytics.admin.v1alpha.AccessQuotaStatus]
"server_errors_per_project_per_hour (21.google.analytics.admin.v1alpha.AccessQuotaStatusV
tokens_per_project_per_hour (21.google.analytics.admin.v1alpha.AccessQuotaStatus"8
AccessQuotaStatus
consumed (
	remaining (B~
"com.google.analytics.admin.v1alphaBAccessReportProtoPZCgoogle.golang.org/genproto/googleapis/analytics/admin/v1alpha;adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

