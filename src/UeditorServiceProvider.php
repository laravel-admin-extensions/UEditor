<?php

namespace Codingyu\Ueditor;

use Encore\Admin\Form;
use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class UeditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Ueditor $extension)
    {
        if (!Ueditor::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-ueditor');
        }

        Admin::booting(function () {
            Form::extend(Ueditor::config('field_type', 'UEditor'), Editor::class);
        });
    }
}
