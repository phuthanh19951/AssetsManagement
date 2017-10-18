<?php

return array(
    'ad'				        => 'Активна директория',
    'ad_domain'				    => 'Домейн на активна директория',
    'ad_domain_help'			=> 'Това е понякога еднакво с вашия email домейн, но не винаги.',
    'is_ad'				        => 'Това е активна директория на сървър',
	'alert_email'				=> 'Изпращане на нотификации към',
	'alerts_enabled'			=> 'Включване на известията',
	'alert_interval'			=> 'Изтичаш праг на известия (в дни)',
	'alert_inv_threshold'		=> 'Праг на известия за запаси',
	'asset_ids'					=> 'ID на активи',
	'audit_interval'            => 'Audit Interval',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months.',
	'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'How many days in advance should we warn you when assets are due for auditing?',
	'auto_increment_assets'		=> 'Автоматично генериране на инвентарни номера на активите',
	'auto_increment_prefix'		=> 'Префикс (незадължително)',
	'auto_incrementing_help'    => 'Първо включете автоматично генериране на инвентарни номера, за да включите тази опция.',
	'backups'					=> 'Архивиране',
	'barcode_settings'			=> 'Настройки на баркод',
    'confirm_purge'			    => 'Потвърдете пречистване ',
    'confirm_purge_help'		=> 'Въдете текста "DELETE" в клетката отдолу за да пречистите изтритите записи. Това действие не може да бъде отменено.',
	'custom_css'				=> 'Потребителски CSS',
	'custom_css_help'			=> 'Включете вашите CSS правила тук. Не използвайте &lt;style&gt;&lt;/style&gt; тагове.',
	'default_currency'  		=> 'Валута по подразбиране',
	'default_eula_text'			=> 'EULA по подразбиране',
  'default_language'					=> 'Език по подразбиране',
	'default_eula_help_text'	=> 'Можете да асоциирате специфична EULA към всяка избрана категория.',
    'display_asset_name'        => 'Визуализиране на актив',
    'display_checkout_date'     => 'Визуализиране на дата на изписване',
    'display_eol'               => 'Визуализиране на EOL в таблиците',
    'display_qr'                => 'Показване на Square кодове',
	'display_alt_barcode'		=> 'Показване на 1D баркод',
	'barcode_type'				=> '2D тип на баркод',
	'alt_barcode_type'			=> '1D тип на баркод',
    'eula_settings'				=> 'Настройки на EULA',
    'eula_markdown'				=> 'Съдържанието на EULA може да бъде форматирано с <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Общи настройки',
	'generate_backup'			=> 'Създаване на архив',
    'header_color'              => 'Цвят на хедъра',
    'info'                      => 'Тези настройки позволяват да конфигурирате различни аспекти на Вашата инсталация.',
    'laravel'                   => 'Версия на Laravel',
    'ldap_enabled'              => 'LDAP включен',
    'ldap_integration'          => 'LDAP интеграция',
    'ldap_settings'             => 'LDAP настройки',
    'ldap_server'               => 'LDAP сървър',
    'ldap_server_help'          => 'Това трябва да започва с Idap:// (for unencrypted or TLS) или Idaps:// (for SSL)',
	'ldap_server_cert'			=> 'Валидация на LDAP SSL сертификата',
	'ldap_server_cert_ignore'	=> 'Допускане на невалиден SSL сертификат',
	'ldap_server_cert_help'		=> 'Изберете тази опция ако използвате самоподписан SSL сертификат.',
    'ldap_tls'                  => 'Използвайте TLS',
    'ldap_tls_help'             => 'Това трябва да се маркира само ако изпълнявате STARTTLS на вашия LDAP сървър. ',
    'ldap_uname'                => 'LDAP потребител за връзка',
    'ldap_pword'                => 'LDAP парола на потребител за връзка',
    'ldap_basedn'               => 'Базов DN',
    'ldap_filter'               => 'LDAP филтър',
    'ldap_pw_sync'              => 'LADP Password SYNC',
    'ldap_pw_sync_help'         => 'Премахнете отметката в тази клетка ако не желаете да запазите LDAP паролите синхронизирани с локални пароли. Деактивиране на това означава, че вашите потребители може да не успеят да влязат използвайки LDAP сървъри ако са недостижими по някаква причина.',
    'ldap_username_field'       => 'Поле за потребителско име',
    'ldap_lname_field'          => 'Фамилия',
    'ldap_fname_field'          => 'LDAP собствено име',
    'ldap_auth_filter_query'    => 'LDAP оторизационна заявка',
    'ldap_version'              => 'LDAP версия',
    'ldap_active_flag'          => 'LDAP флаг за активност',
    'ldap_emp_num'              => 'LDAP номер на служител',
    'ldap_email'                => 'LDAP електронна поща',
    'load_remote_text'          => 'Отдалечени скриптове',
    'load_remote_help_text'		=> 'Тази Snipe-IT инсталация може да зарежда и изпълнява външни скриптове.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Optionally include a few sentences on your login screen, for example to assist people who have found a lost or stolen device. This field accepts <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'logo'                    	=> 'Лого',
    'full_multiple_companies_support_help_text' => 'Ограничаване на потребителите (включително административните) до активите на собствената им компания.',
    'full_multiple_companies_support_text' => 'Поддръжка на множество компании',
    'optional'					=> 'незадължително',
    'per_page'                  => 'Резултати на страница',
    'php'                       => 'PHP версия',
    'php_gd_info'               => 'Необходимо е да инсталирате php-gd, за да визуализирате QR кодове. Моля прегледайте инструкцията за инсталация.',
    'php_gd_warning'            => 'php-gd НЕ е инсталиран.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Select whichever password complexity rules you wish to enforce.',
    'pwd_secure_min'            => 'Password minimum characters',
    'pwd_secure_min_help'       => 'Minimum permitted value is 5',
    'pwd_secure_uncommon'       => 'Prevent common passwords',
    'pwd_secure_uncommon_help'  => 'This will disallow users from using common passwords from the top 10,000 passwords reported in breaches.',
    'qr_help'                   => 'Първо включете QR кодовете, за да извършите тези настройки.',
    'qr_text'                   => 'Съдържание на QR код',
    'setting'                   => 'Настройка',
    'settings'                  => 'Настройки',
    'site_name'                 => 'Име на системата',
    'slack_botname'             => 'Име на Slack bot',
    'slack_channel'             => 'Slack канал',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack настройки',
    'slack_integration_help'    => 'Интеграцията със Slack е незадължителна. Ако желаете да я използвате е необходимо да настроите endpoint и канал. За да конфигурирате Slack интеграцията, първо <a href=":slack_link" target="_new">създайте входящ webhook</a> във Вашия Slack акаунт.',
    'snipe_version'  			=> 'Snipe-IT версия',
    'system'                    => 'Информация за системата',
    'update'                    => 'Обновяване на настройките',
    'value'                     => 'Стойност',
    'brand'                     => 'Брандиране',
    'about_settings_title'      => 'Относно настройките',
    'about_settings_text'       => 'Тези настройки позволяват да конфигурирате различни аспекти на Вашата инсталация.',
    'labels_per_page'           => 'Етикети на страница',
    'label_dimensions'          => 'Измерения на етикети (инчове)',
    'next_auto_tag_base'        => 'Next auto-increment',
    'page_padding'             => 'Марж на страница (инчове)',
    'purge'                    => 'Пречисти изтрити записи',
    'labels_display_bgutter'    => 'Обозначаване на долен канал',
    'labels_display_sgutter'    => 'Обозначаване на страничен канал',
    'labels_fontsize'           => 'Обозначаване на размер на шрифта',
    'labels_pagewidth'          => 'Обозначаване на ширина на листа',
    'labels_pageheight'         => 'Обозначаване на височина на листа',
    'label_gutters'        => 'Обозначаване на разстояние (инчове)',
    'page_dimensions'        => 'Размери на страницата (инчове)',
    'label_fields'          => 'Обозначаване на видими полета',
    'inches'        => 'инчове',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximum height in pixels that thumbnails may display in the listing view. Min 25, max 500.',
    'two_factor'        => 'Двуфакторно удостоверяване',
    'two_factor_secret'        => 'Двуфакторен код',
    'two_factor_enrollment'        => 'Двуфакторово записване',
    'two_factor_enabled_text'        => 'Разреши два фактор',
    'two_factor_reset'        => 'Нулиране на двуфакторова тайна',
    'two_factor_reset_help'        => 'Това ще принуди потребителя да запише своето устройство с Google Authenticator отново. Това може да бъде полезно ако записаните понастоящем устройства са изгубени или откраднати.',
    'two_factor_reset_success'          => 'Двуфакторово устройство нулирано успешно',
    'two_factor_reset_error'          => 'Нулирането на двуфакторово устройство беше неуспешно',
    'two_factor_enabled_warning'        => 'Разрешаване на два-фактора ако не са разрешени в момента, ще ви принуди незабавно да се удостоверите с устройство записано в Google Auth. Ще имате възможността да запишете устройството си ако нямате такова.',
    'two_factor_enabled_help'        => 'Това ще включи двуфакторова заверка която използва Google Authenticator.',
    'two_factor_optional'        => 'Селективни (Потребителите могат да включват или изключват ако им е позволено)',
    'two_factor_required'        => 'Задължително за всички потребители',
    'two_factor_disabled'        => 'Деактивирано',
    'two_factor_enter_code'	=> 'Въведете двуфакторен код',
    'two_factor_config_complete'	=> 'Подаване на код',
    'two_factor_enabled_edit_not_allowed' => 'Вашият администратор не разрешава да редактирате тази настройка.',
    'two_factor_enrollment_text'	=> "Двуфакторово удостоверяване се изисква, но вашето устройство не е било регистрирано още. Отворете Google Authenticator и сканирайте QR кода по-долу за да регистрирате вашето устройство. След като сте записани вашето устройство, въведете кода по-долу",
    'require_accept_signature'      => 'Изисква подпис',
    'require_accept_signature_help_text'      => 'Разрешаването на тази функция ще изисква от потребителите да се подпишат физически за приемане на даден актив.',
    'left'        => 'ляво',
    'right'        => 'дясно',
    'top'        => 'Горе',
    'bottom'        => 'Долу',
    'vertical'        => 'Вертикално',
    'horizontal'        => 'Хоризонтално',
    'zerofill_count'        => 'Дължина на етикети на актив, включително zerofill',
);
