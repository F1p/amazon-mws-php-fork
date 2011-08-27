<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 * MarketplaceWebService_Model_GetReportRequestCountRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportTypeList: MarketplaceWebService_Model_TypeList</li>
 * <li>ReportProcessingStatusList: MarketplaceWebService_Model_StatusList</li>
 * <li>RequestedFromDate: string</li>
 * <li>RequestedToDate: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebService_Model_GetReportRequestCountRequest
extends MarketplaceWebService_ModelRequest
{
    /**
     * Construct new MarketplaceWebService_Model_GetReportRequestCountRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportTypeList: MarketplaceWebService_Model_TypeList</li>
     * <li>ReportProcessingStatusList: MarketplaceWebService_Model_StatusList</li>
     * <li>RequestedFromDate: string</li>
     * <li>RequestedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportTypeList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_TypeList'),
        'ReportProcessingStatusList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebService_Model_StatusList'),
        'RequestedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'RequestedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        );
        parent::__construct($data);
    }
}