<?php
/**
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-06-06
 */

namespace Service\Setting;

use Service\Core\Entity as Core_Entity;

class Entity extends Core_Entity {

    protected $_properties = [
        'site_name'      => '',
        'site_keywords'  => '',
        'site_descrip'   => '',
        'site_copyright' => '',
        'site_icp'       => '',
        'site_phone'     => '',
        'site_address'   => '',
        'site_qq'        => '',
    ];

    public function save() {
        $model = new \Model_Setting();
        foreach ($this->_changed as $key => $value) {
            $model->update($key, $value);
        }
    }
}