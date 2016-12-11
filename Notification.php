<?php
namespace kuakling\lobibox;

/**
 * \kuakling\lobibox\Notification.
 *
 * @author kuakling <kuakling@gmail.com>
 * @since 2.0
 */
class Notification extends \yii\base\Widget
{   
    public $type = 'default';
    
    public $title = null;
    
    public $msg = '';
    
    public $options = [];
    
    public function init()
    {
        parent::init();
        
        if(is_null($this->title)){ $this->title = ucfirst($this->type); }
    }
    /**
     * Renders the widget.
     */
    public function run()
    {
        $asset = LobiboxAsset::register($this->getView());
        $this->registerNoti($asset);
    }
    
    public function registerNoti($asset)
    {
        $view = $this->getView();
        $type = $this->type;
        $options = array_merge([
            'msg' => $this->msg,
            'title' => $this->title,
            'position' => 'right top',
            'soundPath' => $asset->baseUrl.'/sounds/'
        ], $this->options);
        $jsonOptions = \yii\helpers\Json::encode($options);
        $js[] = <<< JS
Lobibox.notify('$this->type', $jsonOptions);
JS;
        $view->registerJs(implode("\n", $js));
    }
}
