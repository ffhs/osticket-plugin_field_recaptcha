# osTicket Google reCAPTCHA Plugin

## Introduction

This plugin can be used to add a new form field to an form.

Plugin is based on https://github.com/osTicket/osTicket-plugins/tree/01cea8dee7a817313ab3be62fef905c238488e60/field-recaptcha.

## Requirements

- osTicket >=1.14.x
- Google Account to register a website https://www.google.com/recaptcha/admin/create

## Installation

- Use `git` to install the source to your deploy directory or direct in to the web directory:

```bash
cd <path-to-your-deploy-dir>
git clone https://github.com/ffhs/osticket-plugin_field_recaptcha.git include/plugins/field-recaptcha
php manage.php deploy --v <path-to-your-web-dir>

# OR easier way

cd <path-to-your-web-dir>
git clone https://github.com/ffhs/osticket-plugin_field_recaptcha.git include/plugins/field-recaptcha
```

- Install and activate the plugin in the osTicket plugin administration https://FQDN/scp/plugins.php

## Configuration

Click on the plugin name in the osTicket plugin administration https://FQDN/scp/plugins.php and set the required settings.

Afterwards add this field to an existing form under https://FQDN/scp/forms.php. Per example we've added it in the `Ticket Details` with the following settings:
- Label: reCAPTCHA
- Type: Google reCAPTCHA
- Visibility: For EndUsers Only, Required, Immutable
- Variable: recaptcha

Disable the `Human Verification` functionality under https://FQDN/scp/settings.php?t=tickets.

## Further information

- https://github.com/poctob/OSTEquipmentPlugin/wiki/Plugin-Development-Introduction
- https://github.com/osTicket/osTicket-plugins
- https://docs.osticket.com/en/latest/Admin/Manage/Plugins.html

## License

2021 Adrian Perez, Fernfachhochschule Schweiz (FFHS) <adrian.perez@ffhs.ch>

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either
version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
