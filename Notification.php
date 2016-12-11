<?php
namespace kuakling\lobibox;

use yii\helpers\Html;

/**
 * \kuakling\lobibox\Notification.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class Notification extends \yii\base\Widget
{   
    /**
     * Renders the widget.
     */
    public function run()
    {
        LoliboxAsset::register($this->getView());
    }
}
