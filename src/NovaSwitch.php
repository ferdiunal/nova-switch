<?php

namespace Ferdiunal\NovaSwitch;

use Laravel\Nova\Fields\Boolean;

class NovaSwitch extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-switch';

    public function trueValueLabel($value)
    {
        return $this->withMeta(['trueValueLabel' => $value]);
    }

    public function falseValueLabel($value)
    {
        return $this->withMeta(['falseValueLabel' => $value]);
    }
}
