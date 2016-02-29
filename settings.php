<?php

defined('MOODLE_INTERNAL') || die;
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('moodlecourse_linktosection', get_string('replacesectionlinks', 'format_aruponepage'),
                       get_string('replacesectionlinksdesc', 'format_aruponepage'), 1));
}