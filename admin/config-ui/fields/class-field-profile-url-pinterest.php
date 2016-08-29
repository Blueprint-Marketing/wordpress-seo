<?php
/**
 * @package WPSEO\Admin\ConfigurationUI
 */

/**
 * Class WPSEO_Config_Field_Profile_URL_Pinterest
 */
class WPSEO_Config_Field_Profile_URL_Pinterest extends WPSEO_Config_Field {

	/**
	 * WPSEO_Config_Field_Profile_URL_Pinterest constructor.
	 */
	public function __construct() {
		parent::__construct( 'profileUrlPinterest', 'input' );

		// @todo apply i18n
		$this->set_property( 'label', 'Pinterest URL' );
		$this->set_property( 'pattern', '^https:\/\/www\.pinterest\.com\/([^/]+)\/$' );
	}
}