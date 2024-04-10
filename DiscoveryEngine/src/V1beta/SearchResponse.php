<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SearchService.Search][google.cloud.discoveryengine.v1beta.SearchService.Search]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse</code>
 */
class SearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of matched documents. The order represents the ranking.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult results = 1;</code>
     */
    private $results;
    /**
     * Results of facets requested by user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Facet facets = 2;</code>
     */
    private $facets;
    /**
     * Guided search result.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.GuidedSearchResult guided_search_result = 8;</code>
     */
    protected $guided_search_result = null;
    /**
     * The estimated total count of matched items irrespective of pagination. The
     * count of
     * [results][google.cloud.discoveryengine.v1beta.SearchResponse.results]
     * returned by pagination may be less than the
     * [total_size][google.cloud.discoveryengine.v1beta.SearchResponse.total_size]
     * that matches.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    protected $total_size = 0;
    /**
     * A unique search token. This should be included in the
     * [UserEvent][google.cloud.discoveryengine.v1beta.UserEvent] logs resulting
     * from this search, which enables accurate attribution of search model
     * performance.
     *
     * Generated from protobuf field <code>string attribution_token = 4;</code>
     */
    protected $attribution_token = '';
    /**
     * The URI of a customer-defined redirect page. If redirect action is
     * triggered, no search is performed, and only
     * [redirect_uri][google.cloud.discoveryengine.v1beta.SearchResponse.redirect_uri]
     * and
     * [attribution_token][google.cloud.discoveryengine.v1beta.SearchResponse.attribution_token]
     * are set in the response.
     *
     * Generated from protobuf field <code>string redirect_uri = 12;</code>
     */
    protected $redirect_uri = '';
    /**
     * A token that can be sent as
     * [SearchRequest.page_token][google.cloud.discoveryengine.v1beta.SearchRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 5;</code>
     */
    protected $next_page_token = '';
    /**
     * Contains the spell corrected query, if found. If the spell correction type
     * is AUTOMATIC, then the search results are based on corrected_query.
     * Otherwise the original query is used for search.
     *
     * Generated from protobuf field <code>string corrected_query = 7;</code>
     */
    protected $corrected_query = '';
    /**
     * A summary as part of the search results.
     * This field is only returned if
     * [SearchRequest.ContentSearchSpec.summary_spec][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.summary_spec]
     * is set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary summary = 9;</code>
     */
    protected $summary = null;
    /**
     * Controls applied as part of the Control service.
     *
     * Generated from protobuf field <code>repeated string applied_controls = 10;</code>
     */
    private $applied_controls;
    /**
     * Debug information specifically related to forward geocoding issues arising
     * from Geolocation Search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.GeoSearchDebugInfo geo_search_debug_info = 16;</code>
     */
    private $geo_search_debug_info;
    /**
     * Query expansion information for the returned results.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.QueryExpansionInfo query_expansion_info = 14;</code>
     */
    protected $query_expansion_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           A list of matched documents. The order represents the ranking.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Facet>|\Google\Protobuf\Internal\RepeatedField $facets
     *           Results of facets requested by user.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GuidedSearchResult $guided_search_result
     *           Guided search result.
     *     @type int $total_size
     *           The estimated total count of matched items irrespective of pagination. The
     *           count of
     *           [results][google.cloud.discoveryengine.v1beta.SearchResponse.results]
     *           returned by pagination may be less than the
     *           [total_size][google.cloud.discoveryengine.v1beta.SearchResponse.total_size]
     *           that matches.
     *     @type string $attribution_token
     *           A unique search token. This should be included in the
     *           [UserEvent][google.cloud.discoveryengine.v1beta.UserEvent] logs resulting
     *           from this search, which enables accurate attribution of search model
     *           performance.
     *     @type string $redirect_uri
     *           The URI of a customer-defined redirect page. If redirect action is
     *           triggered, no search is performed, and only
     *           [redirect_uri][google.cloud.discoveryengine.v1beta.SearchResponse.redirect_uri]
     *           and
     *           [attribution_token][google.cloud.discoveryengine.v1beta.SearchResponse.attribution_token]
     *           are set in the response.
     *     @type string $next_page_token
     *           A token that can be sent as
     *           [SearchRequest.page_token][google.cloud.discoveryengine.v1beta.SearchRequest.page_token]
     *           to retrieve the next page. If this field is omitted, there are no
     *           subsequent pages.
     *     @type string $corrected_query
     *           Contains the spell corrected query, if found. If the spell correction type
     *           is AUTOMATIC, then the search results are based on corrected_query.
     *           Otherwise the original query is used for search.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary $summary
     *           A summary as part of the search results.
     *           This field is only returned if
     *           [SearchRequest.ContentSearchSpec.summary_spec][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.summary_spec]
     *           is set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $applied_controls
     *           Controls applied as part of the Control service.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GeoSearchDebugInfo>|\Google\Protobuf\Internal\RepeatedField $geo_search_debug_info
     *           Debug information specifically related to forward geocoding issues arising
     *           from Geolocation Search.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\QueryExpansionInfo $query_expansion_info
     *           Query expansion information for the returned results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of matched documents. The order represents the ranking.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * A list of matched documents. The order represents the ranking.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult results = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Results of facets requested by user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Facet facets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * Results of facets requested by user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Facet facets = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Facet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFacets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Facet::class);
        $this->facets = $arr;

        return $this;
    }

    /**
     * Guided search result.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.GuidedSearchResult guided_search_result = 8;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GuidedSearchResult|null
     */
    public function getGuidedSearchResult()
    {
        return $this->guided_search_result;
    }

    public function hasGuidedSearchResult()
    {
        return isset($this->guided_search_result);
    }

    public function clearGuidedSearchResult()
    {
        unset($this->guided_search_result);
    }

    /**
     * Guided search result.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.GuidedSearchResult guided_search_result = 8;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GuidedSearchResult $var
     * @return $this
     */
    public function setGuidedSearchResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GuidedSearchResult::class);
        $this->guided_search_result = $var;

        return $this;
    }

    /**
     * The estimated total count of matched items irrespective of pagination. The
     * count of
     * [results][google.cloud.discoveryengine.v1beta.SearchResponse.results]
     * returned by pagination may be less than the
     * [total_size][google.cloud.discoveryengine.v1beta.SearchResponse.total_size]
     * that matches.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The estimated total count of matched items irrespective of pagination. The
     * count of
     * [results][google.cloud.discoveryengine.v1beta.SearchResponse.results]
     * returned by pagination may be less than the
     * [total_size][google.cloud.discoveryengine.v1beta.SearchResponse.total_size]
     * that matches.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

    /**
     * A unique search token. This should be included in the
     * [UserEvent][google.cloud.discoveryengine.v1beta.UserEvent] logs resulting
     * from this search, which enables accurate attribution of search model
     * performance.
     *
     * Generated from protobuf field <code>string attribution_token = 4;</code>
     * @return string
     */
    public function getAttributionToken()
    {
        return $this->attribution_token;
    }

    /**
     * A unique search token. This should be included in the
     * [UserEvent][google.cloud.discoveryengine.v1beta.UserEvent] logs resulting
     * from this search, which enables accurate attribution of search model
     * performance.
     *
     * Generated from protobuf field <code>string attribution_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAttributionToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->attribution_token = $var;

        return $this;
    }

    /**
     * The URI of a customer-defined redirect page. If redirect action is
     * triggered, no search is performed, and only
     * [redirect_uri][google.cloud.discoveryengine.v1beta.SearchResponse.redirect_uri]
     * and
     * [attribution_token][google.cloud.discoveryengine.v1beta.SearchResponse.attribution_token]
     * are set in the response.
     *
     * Generated from protobuf field <code>string redirect_uri = 12;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * The URI of a customer-defined redirect page. If redirect action is
     * triggered, no search is performed, and only
     * [redirect_uri][google.cloud.discoveryengine.v1beta.SearchResponse.redirect_uri]
     * and
     * [attribution_token][google.cloud.discoveryengine.v1beta.SearchResponse.attribution_token]
     * are set in the response.
     *
     * Generated from protobuf field <code>string redirect_uri = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

    /**
     * A token that can be sent as
     * [SearchRequest.page_token][google.cloud.discoveryengine.v1beta.SearchRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 5;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as
     * [SearchRequest.page_token][google.cloud.discoveryengine.v1beta.SearchRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Contains the spell corrected query, if found. If the spell correction type
     * is AUTOMATIC, then the search results are based on corrected_query.
     * Otherwise the original query is used for search.
     *
     * Generated from protobuf field <code>string corrected_query = 7;</code>
     * @return string
     */
    public function getCorrectedQuery()
    {
        return $this->corrected_query;
    }

    /**
     * Contains the spell corrected query, if found. If the spell correction type
     * is AUTOMATIC, then the search results are based on corrected_query.
     * Otherwise the original query is used for search.
     *
     * Generated from protobuf field <code>string corrected_query = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCorrectedQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->corrected_query = $var;

        return $this;
    }

    /**
     * A summary as part of the search results.
     * This field is only returned if
     * [SearchRequest.ContentSearchSpec.summary_spec][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.summary_spec]
     * is set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary summary = 9;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary|null
     */
    public function getSummary()
    {
        return $this->summary;
    }

    public function hasSummary()
    {
        return isset($this->summary);
    }

    public function clearSummary()
    {
        unset($this->summary);
    }

    /**
     * A summary as part of the search results.
     * This field is only returned if
     * [SearchRequest.ContentSearchSpec.summary_spec][google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.summary_spec]
     * is set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.Summary summary = 9;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary::class);
        $this->summary = $var;

        return $this;
    }

    /**
     * Controls applied as part of the Control service.
     *
     * Generated from protobuf field <code>repeated string applied_controls = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppliedControls()
    {
        return $this->applied_controls;
    }

    /**
     * Controls applied as part of the Control service.
     *
     * Generated from protobuf field <code>repeated string applied_controls = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppliedControls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->applied_controls = $arr;

        return $this;
    }

    /**
     * Debug information specifically related to forward geocoding issues arising
     * from Geolocation Search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.GeoSearchDebugInfo geo_search_debug_info = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoSearchDebugInfo()
    {
        return $this->geo_search_debug_info;
    }

    /**
     * Debug information specifically related to forward geocoding issues arising
     * from Geolocation Search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.GeoSearchDebugInfo geo_search_debug_info = 16;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GeoSearchDebugInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoSearchDebugInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\GeoSearchDebugInfo::class);
        $this->geo_search_debug_info = $arr;

        return $this;
    }

    /**
     * Query expansion information for the returned results.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.QueryExpansionInfo query_expansion_info = 14;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\QueryExpansionInfo|null
     */
    public function getQueryExpansionInfo()
    {
        return $this->query_expansion_info;
    }

    public function hasQueryExpansionInfo()
    {
        return isset($this->query_expansion_info);
    }

    public function clearQueryExpansionInfo()
    {
        unset($this->query_expansion_info);
    }

    /**
     * Query expansion information for the returned results.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchResponse.QueryExpansionInfo query_expansion_info = 14;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\QueryExpansionInfo $var
     * @return $this
     */
    public function setQueryExpansionInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\QueryExpansionInfo::class);
        $this->query_expansion_info = $var;

        return $this;
    }

}

