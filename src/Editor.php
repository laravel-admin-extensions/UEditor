<?php

namespace Codingyu\Ueditor;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    protected $view = 'laravel-admin-ueditor::editor';

    protected static $js = [
        'vendor/ueditor/ueditor.config.js',
        'vendor/ueditor/ueditor.all.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);
        
        $jsId = \Illuminate\Support\Str::studly(\Illuminate\Support\Str::slug($this->id));

        $config = Ueditor::config('config', []);

        $config = json_encode(array_merge($config, $this->options));

        $laravel_ueditor_route = config('ueditor.route.name');
        $token = csrf_token();

        $this->script = <<<EOT

window.UEDITOR_CONFIG.serverUrl = '{$laravel_ueditor_route}';
UE.delEditor("{$this->id}");
var ue_{$jsId} = UE.getEditor('{$this->id}', {$config});
ue_{$jsId}.ready(function() {
    ue_{$jsId}.execCommand('serverparam', '_token', '$token');
});

EOT;
        return parent::render();
    }
}
