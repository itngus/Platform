<?php

namespace Orchid\Foundation\Fields;

use Orchid\Foundation\Services\Field\Field;

class InputField extends Field
{
    /**
     * HTML tag.
     * @var string
     */
    protected $tag = 'input';

    /**
     * The type attribute specifies the type of <input> element to display.
     * The default type is: text.
     * @var array
     */
    protected $type = [
        'button',
        'checkbox',
        'color',
        'date',
        'datetime',
        'datetime-local',
        'email',
        'file',
        'hidden',
        'image',
        'month',
        'number',
        'password',
        'radio',
        'range',
        'reset',
        'search',
        'submit',
        'tel',
        'text',
        'time',
        'url',
        'week',
    ];


    /**
     * The max attribute specifies the maximum value for an <input> element.
     * Use the max attribute together with the min attribute to create a range of legal values.
     * @var
     */
    protected $max;

    /**
     * The min attribute specifies the minimum value for an <input> element.
     * Use the min attribute together with the max attribute to create a range of legal values.
     * @var
     */
    protected $min;


    /**
     * The maxlength attribute specifies the maximum number of characters allowed in the <input> element.
     * @var
     */
    protected $maxlength;


    /**
     * The checked attribute is a boolean attribute.
     * When present, it specifies that an <input> element should be pre-selected (checked) when the page loads.
     * @var
     */
    protected $checked;

    /**
     * @var string
     */
    public $view = 'dashboard::fields.input';

    /**
     * Create Object.
     *
     * @param null $attributes
     * @param null $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($attributes, $data = null)
    {
        if (is_array($this->type)) {
            $this->type = 'text';
        }

        if (is_null($data)) {
            $data = collect();
        }

        $attributes->put('data', $data);



        return view($this->view, $attributes);
    }
}
