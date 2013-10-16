<?php

require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_CbmTrxn extends CRM_Core_DAO {
	
	static $_tableName = 'civicrm_cbm_trxn';
    static $_fields = null;
    static $_links = null;
    static $_import = null;
    static $_export = null;
    static $_log = false;
    
    public $id;
    public $cbm_unique_id;
    public $payment_num;
    public $auth_url;
    public $auth_port;
    public $state;
    public $amount;
    public $contact_id;
    public $contribution_id;
    public $contributionType_id;
    public $invoice_id;
    public $component;
    public $qfkey;
    public $participant_id;
    public $event_id;
    public $membership_id;
    public $notification_request_code;
    public $continue_status_code;
    
    function __construct() {
        parent::__construct();
    }
    
 	function &links() {
        if (!(self::$_links)) {
            self::$_links = array(
                'contribution_id' => 'civicrm_contribution:id',
                'participant_id' => 'civicrm_participant:id',
            	'event_id' => 'civicrm_event:id',
            	'contact_id' => 'civicrm_contact:id',
            );
        }
        return self::$_links;
    }
    
    function &fields()
    {
        if (!(self::$_fields)) {
            self::$_fields = array(
                'id' => array(
                    'name' => 'id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'cbm_unique_id' => array(
                    'name' => 'cbm_unique_id',
                    'type' => CRM_Utils_Type::T_STRING,
                    'maxlength' => 45,
                	'required' => true,
                ) ,
                'payment_num' => array(
                    'name' => 'payment_num',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                'auth_url' => array(
                    'name' => 'auth_url',
                    'type' => CRM_Utils_Type::T_STRING,
                    'maxlength' => 64,
                	'required' => true,
                ) ,
                'auth_port' => array(
                    'name' => 'auth_port',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => true,
                ) ,
                'state' => array(
                    'name' => 'state',
                    'type' => CRM_Utils_Type::T_STRING,
                	'required' => true,
                ) ,
                'amount' => array(
                    'name' => 'amount',
                    'type' => CRM_Utils_Type::T_FLOAT,
                	'required' => true,
                ) ,
                'contact_id' => array(
                    'name' => 'contact_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => true,
                ) ,
                'contribution_id' => array(
                    'name' => 'contribution_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => true,
                ) ,
                'contributionType_id' => array(
                    'name' => 'contributionType_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => true,
                ) ,
                'invoice_id' => array(
                    'name' => 'invoice_id',
                    'type' => CRM_Utils_Type::T_STRING,
                	'maxlength' => 64,
                	'required' => true,
                ) ,
                'component' => array(
                    'name' => 'component',
                    'type' => CRM_Utils_Type::T_STRING,
                    'maxlength' => 32,
                	'required' => true,
                ) ,
                'qfkey' => array(
                    'name' => 'qfkey',
                    'type' => CRM_Utils_Type::T_STRING,
                    'maxlength' => 64,
                	'required' => true,
                ) ,
                'participant_id' => array(
                    'name' => 'participant_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                'event_id' => array(
                    'name' => 'event_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                'membership_id' => array(
                    'name' => 'membership_id',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                'notification_request_code' => array(
                    'name' => 'notification_request_code',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                'continue_status_code' => array(
                    'name' => 'continue_status_code',
                    'type' => CRM_Utils_Type::T_INT,
                	'required' => false,
                ) ,
                );
        }
        return self::$_fields;
    }	
	
    function getTableName() {
        return self::$_tableName;
    }
    
    function getLog() {
        return self::$_log;
    }

  	function &import($prefix = false) {
        if (!(self::$_import)) {
            self::$_import = array();
            $fields = & self::fields();
            foreach($fields as $name => $field) {
               
            }
        }
        return self::$_import;
    }

 	function &export($prefix = false) {
        if (!(self::$_export)) {
            self::$_export = array();
            $fields = & self::fields();
            foreach($fields as $name => $field) {

            }
        }
        return self::$_export;
    }
    
    
    
}












