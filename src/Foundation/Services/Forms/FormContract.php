<?php

namespace Orchid\Foundation\Services\Forms;

interface FormContract
{
    /**
     * @return mixed
     */
    public function grid();

    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function save();

    /**
     * @return mixed
     */
    public function remove();
}
