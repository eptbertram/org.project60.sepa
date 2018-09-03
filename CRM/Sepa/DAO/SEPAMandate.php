<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from /home/bjoern/workspace/CiviSEPA/xml/schema/CRM/Sepa/Mandate.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:0c65352d1fb37bfce8e809c691483f6e)
 */

/**
 * Database access object for the SEPAMandate entity.
 */
class CRM_Sepa_DAO_SEPAMandate extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_sdd_mandate';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * A unique mandate reference
   *
   * @var string
   */
  public $reference;

  /**
   * Information about the source of registration of the mandate
   *
   * @var string
   */
  public $source;

  /**
   * Physical tablename for the contract entity being joined, eg contributionRecur or Membership
   *
   * @var string
   */
  public $entity_table;

  /**
   * FK to contract entity table specified in entity_table column.
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * by default now()
   *
   * @var datetime
   */
  public $date;

  /**
   * FK to ssd_creditor
   *
   * @var int unsigned
   */
  public $creditor_id;

  /**
   * FK to Contact ID of the debtor
   *
   * @var int unsigned
   */
  public $contact_id;

  /**
   * Iban of the debtor
   *
   * @var string
   */
  public $iban;

  /**
   * BIC of the debtor
   *
   * @var string
   */
  public $bic;

  /**
   * RCUR for recurrent (default), OOFF for one-shot
   *
   * @var string
   */
  public $type;

  /**
   * Status of the mandate (INIT, OOFF, FRST, RCUR, SENT, INVALID, COMPLETE, ONHOLD)
   *
   * @var string
   */
  public $status;

  /**
   * @var datetime
   */
  public $creation_date;

  /**
   * FK to civicrm_contribution
   *
   * @var int unsigned
   */
  public $first_contribution_id;

  /**
   * @var datetime
   */
  public $validation_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_sdd_mandate';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'creditor_id', 'civicrm_sdd_creditor', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'first_contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'ID',
          'required' => TRUE,
          'export' => TRUE,
          'where' => 'civicrm_sdd_mandate.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'reference' => [
          'name' => 'reference',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Reference'),
          'description' => 'A unique mandate reference',
          'required' => TRUE,
          'maxlength' => 35,
          'size' => CRM_Utils_Type::BIG,
          'export' => TRUE,
          'where' => 'civicrm_sdd_mandate.reference',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'source' => [
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Source'),
          'description' => 'Information about the source of registration of the mandate',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => 'Physical tablename for the contract entity being joined, eg contributionRecur or Membership',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => 'FK to contract entity table specified in entity_table column.',
          'required' => TRUE,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'date' => [
          'name' => 'date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Mandate signature date'),
          'description' => 'by default now()',
          'required' => TRUE,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'creditor_id' => [
          'name' => 'creditor_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Creditor ID'),
          'description' => 'FK to ssd_creditor',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => 'FK to Contact ID of the debtor',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'iban' => [
          'name' => 'iban',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Iban'),
          'description' => 'Iban of the debtor',
          'required' => FALSE,
          'maxlength' => 42,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'bic' => [
          'name' => 'bic',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Bic'),
          'description' => 'BIC of the debtor',
          'maxlength' => 11,
          'size' => CRM_Utils_Type::TWELVE,
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'type' => [
          'name' => 'type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Type'),
          'description' => 'RCUR for recurrent (default), OOFF for one-shot',
          'required' => TRUE,
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'default' => 'RCUR',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status'),
          'description' => 'Status of the mandate (INIT, OOFF, FRST, RCUR, SENT, INVALID, COMPLETE, ONHOLD)',
          'required' => TRUE,
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'default' => 'INIT',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'creation_date' => [
          'name' => 'creation_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('creation date'),
          'export' => TRUE,
          'where' => 'civicrm_sdd_mandate.creation_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'first_contribution_id' => [
          'name' => 'first_contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('First Contribution (to be deprecated)'),
          'description' => 'FK to civicrm_contribution',
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
        'validation_date' => [
          'name' => 'validation_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('validation date'),
          'table_name' => 'civicrm_sdd_mandate',
          'entity' => 'SEPAMandate',
          'bao' => 'CRM_Sepa_DAO_SEPAMandate',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sdd_mandate', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sdd_mandate', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'reference' => [
        'name' => 'reference',
        'field' => [
          0 => 'reference',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_sdd_mandate::1::reference',
      ],
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_sdd_mandate::0::entity_table::entity_id',
      ],
      'iban' => [
        'name' => 'iban',
        'field' => [
          0 => 'iban',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_sdd_mandate::0::iban',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
