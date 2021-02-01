<?php
defined('BASEPATH') || exit('No direct script access allowed');

function date_indo($date)
{
    return date('d-m-Y', strtotime($date));
}
