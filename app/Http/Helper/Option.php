<?php

namespace App\Http\Helper;

use App\Models\Option as ModelsOption;

class Option
{
    public static function get($key)
    {
        $option = ModelsOption::where('key', $key)->first();
        if ($option) {
            return $option->value;
        }
        return null;
    }

    public static function set($key, $value)
    {
        $option = ModelsOption::where('key', $key)->first();
        if ($option) {
            $option->value = $value;
        } else {
            $option = new ModelsOption();
            $option->key = $key;
            $option->value = $value;
        }
        $option->save();
    }
}


function get_option($key)
{
    return Option::get($key);
}

function set_option($key, $value)
{
    Option::set($key, $value);
}

function option()
{
    return "holl";
}
