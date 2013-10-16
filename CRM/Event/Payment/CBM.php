<?php 


/**
 *	Custom payment processor for UBC CBM
 *	to be used with CiviCRM module for Drupal
 *
 */
           
require_once 'CRM/Core/Payment/CBM.php';

class CRM_Event_Payment_CBM extends CRM_Core_Payment_CBM {
    /** 
     * We only need one instance of this object. So we use the singleton 
     * pattern and cache the instance in this variable 
     * 
     * @var object 
     * @static 
     */ 
    static private $_singleton = null; 
    
    /** 
     * Constructor 
     * 
     * @param string $mode the mode of operation: live or test
     *
     * @return void 
     */ 
    function __construct( $mode, &$paymentProcessor ) {
        parent::__construct( $mode, $paymentProcessor );
    }

    /** 
     * singleton function used to manage this object 
     * 
     * @param string $mode the mode of operation: live or test
     * 
     * @return object 
     * @static 
     * 
     */ 
    static function &singleton( $mode, &$paymentProcessor ) {
        if (self::$_singleton === null ) { 
            self::$_singleton = new CRM_Event_Payment_CBM( $mode, $paymentProcessor );
        } 
        return self::$_singleton; 
    } 

    function doTransferCheckout( &$params ) {
        parent::doTransferCheckout( $params, 'event' );
    }

}


