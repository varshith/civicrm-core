<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/PreferencesDate.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:50b4071bc8734a772c01b450d22f5920)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_PreferencesDate constructor.
 */
class CRM_Core_DAO_PreferencesDate extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_preferences_date';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * The meta name for this date (fixed in code)
   *
   * @var string
   */
  public $name;
  /**
   * Description of this date type.
   *
   * @var string
   */
  public $description;
  /**
   * The start offset relative to current year
   *
   * @var int
   */
  public $start;
  /**
   * The end offset relative to current year, can be negative
   *
   * @var int
   */
  public $end;
  /**
   * The date type
   *
   * @var string
   */
  public $date_format;
  /**
   * time format
   *
   * @var string
   */
  public $time_format;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_preferences_date';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Date Preference ID') ,
          'required' => true,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Date Preference Name') ,
          'description' => 'The meta name for this date (fixed in code)',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description') ,
          'description' => 'Description of this date type.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'start' => array(
          'name' => 'start',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Start') ,
          'description' => 'The start offset relative to current year',
          'required' => true,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'end' => array(
          'name' => 'end',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('End Offset') ,
          'description' => 'The end offset relative to current year, can be negative',
          'required' => true,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'date_format' => array(
          'name' => 'date_format',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Date Format') ,
          'description' => 'The date type',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
        'time_format' => array(
          'name' => 'time_format',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Time Format') ,
          'description' => 'time format',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_preferences_date',
          'entity' => 'PreferencesDate',
          'bao' => 'CRM_Core_BAO_PreferencesDate',
          'localizable' => 0,
        ) ,
      );
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
  static function &fieldKeys() {
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
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'preferences_date', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'preferences_date', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'index_name' => array(
        'name' => 'index_name',
        'field' => array(
          0 => 'name',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_preferences_date::0::name',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
