<?php

require_once ('Transactions.php');

/**
 * Paymill API wrapper for transactions resource
 */
class Services_Paymill_Preauthorizations extends Services_Paymill_Transactions
{
    /**
     * {@inheritDoc}
     */
    protected $_serviceResource = 'preauthorizations/';
}