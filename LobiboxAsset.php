<?php
namespace kuakling\lobibox;
use yii\web\AssetBundle;
/**
 * Asset bundle for the Lobibox files.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class LobiboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/lobibox/dist';
    
    public $css = [
        'css/lobibox.min.css',
    ];
    
    public $js = [
        'js/lobibox.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
