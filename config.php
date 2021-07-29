<?php

class reCaptchaConfig extends PluginConfig
{
    function getOptions()
    {
        return [
            '_' => new SectionBreakField([
                'hint' => 'Requires separate registration for a website under https://www.google.com/recaptcha/admin/create'
            ]),
            'recaptcha_verifyurl' => new TextboxField([
                'id' => 'recaptcha_verifyurl',
                'label' => 'Verify URL (API token validation)',
                'hint' => 'More information under https://developers.google.com/recaptcha/docs/verify',
                'default' => 'https://www.google.com/recaptcha/api/siteverify',
                'configuration' => [
                    'size' => 59,
                    'length' => 255
                ],
                'required' => true,
            ]),
            'recaptcha_widgetjs' => new TextboxField([
                'id' => 'recaptcha_widgetjs',
                'label' => 'Widget JS URL (automatically render widget)',
                'hint' => 'More information under https://developers.google.com/recaptcha/docs/display#auto_render',
                'default' => 'https://www.google.com/recaptcha/api.js',
                'configuration' => [
                    'size' => 59,
                    'length' => 255
                ],
                'required' => true,
            ]),
            'recaptcha_sitekey' => new TextboxField([
                'id' => 'recaptcha_sitekey',
                'label' => 'Site Key',
                'configuration' => [
                    'size' => 59,
                    'length' => 255
                ],
                'required' => true,
            ]),
            'recaptcha_secretkey' => new TextboxField([
                'id' => 'recaptcha_secretkey',
                'label' => 'Secret Key',
                'configuration' => [
                    'size' => 59,
                    'length' => 255
                ],
                'required' => true,
                'widget' => 'PasswordWidget',
            ]),
        ];
    }

    function pre_save($config, &$errors)
    {
        if (!function_exists('curl_init')) {
            Messages::error('CURL extension is required');
            return false;
        }

        return true;
    }
}
