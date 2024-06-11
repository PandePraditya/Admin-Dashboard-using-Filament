<?php 

use App\Models\partner;
use App\Models\section;
use App\Models\setting;

    function get_setting_value($key) {
        $data = setting::where('key', $key)->first();
        if (isset($data->value)) {
            return $data->value;
        } else {
            return 'empty';
        }
    }

    function get_section_data($key) {
        $data = section::where('posts_as', $key)->first();
        if (isset($data)) {
            return $data;
        } else {
            return 'empty';
        }
    }

    function get_partner_data() {
        $data = partner::all();
        return $data;
    }