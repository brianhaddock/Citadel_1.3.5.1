<?php if(!defined('__CP__'))die();
define('LNG_REPORTS', 'Поиск в базе данных');

define('LNG_REPORTS_BOTSACTION', 'Действие над ботами:');

// Connect
define('LNG_REPORTS_CONNECT_ANOTHERDB',           'Соединение с другой БД');
define('LNG_REPORTS_CONNECT_DBNAME',              'База');
define('LNG_REPORTS_CONNECT_SETUP',               'Настройка');
define('LNG_REPORTS_CONNECT_THIS',                'Текущая');

//Фильтр.
define('LNG_REPORTS_FILTER_TITLE',      'Фильтр');

define('LNG_REPORTS_FILTER_DATE_P1',    'Искать с даты (дд.мм):');
define('LNG_REPORTS_FILTER_DATE_P2',    'по дату:');
define('LNG_REPORTS_FILTER_DATE_P3',    '');

define('LNG_REPORTS_FILTER_BOTS',       'Боты:');
define('LNG_REPORTS_FILTER_BOTNETS',    'Ботнеты:');
define('LNG_REPORTS_FILTER_IPS',        'IP-адреса:');
define('LNG_REPORTS_FILTER_COUNTRIES',  'Страны:');
define('LNG_REPORTS_FILTER_QUERY',      'Строка поиска:');
define('LNG_REPORTS_FILTER_QUERYSTOP',  'Стоп-слова:');
define('LNG_REPORTS_FILTER_URLMASKS',   'Маски URL:');
define('LNG_REPORTS_FILTER_REPORTTYPE', 'Тип отчета:');
define('LNG_REPORTS_FILTER_FAVORITES',  'Только избранные.');
define('LNG_REPORTS_FILTER_CS',         'С учетом регистра.');
define('LNG_REPORTS_FILTER_GROUPQUERY', 'Исключить повтор отчетов (в пределах одного дня).');
define('LNG_REPORTS_FILTER_NONAMES',    'Отображать только отчеты (не отображать имена ботов).');
define('LNG_REPORTS_FILTER_PLAIN',      'Вывод в текстовом режиме (text/plain).');
define('LNG_REPORTS_FILTER_ONLINE',     'Только боты онлайн.');

define('LNG_REPORTS_FILTER_ALL',        '--');

define('LNG_REPORTS_FILTER_RESET',      'Сброс формы');
define('LNG_REPORTS_FILTER_SUBMIT',     'Поиск');
define('LNG_REPORTS_FILTER_REMOVE',     'Удалить');
define('LNG_REPORTS_FILTER_REMOVE_Q',   'Вы действительно хотите удалить отчета по текущему фильтру?');

define('LNG_REPORTS_RESULT', 'Результат:');

define('LNG_REPORTS_DATE_EMPTY',     'Указанная дата не найдена.');
define('LNG_REPORTS_DATE_NOREPORTS', 'По указанному фильтру отчетов на эту дату не найдено.');
define('LNG_REPORTS_DATE_ERROR',     'ОШИБКА!');
define('LNG_REPORTS_DATE_REMOVED',   'Удалено %u записей.');
define('LNG_REPORTS_DATE_DROPPED',   'Таблица уничтожена.');

define('LNG_REPORTS_VIEW_NOT_EXISTS', 'Отчет не найден.');
define('LNG_REPORTS_VIEW_TITLE',      'Просмотр отчета');
define('LNG_REPORTS_VIEW_TITLE2',     'Просмотр отчета (%s, %s байт)');
define('LNG_REPORTS_VIEW_BOTID',      'Bot ID:');
define('LNG_REPORTS_VIEW_BOTNET',     'Ботнет:');
define('LNG_REPORTS_VIEW_VERSION',    'Версия:');
define('LNG_REPORTS_VIEW_OS',         'Версия ОС (язык):');
define('LNG_REPORTS_VIEW_OSLANG',     'Язык ОС:');
define('LNG_REPORTS_VIEW_TIME',       'Локальное время:');
define('LNG_REPORTS_VIEW_TIMEBIAS',   'GMT:');
define('LNG_REPORTS_VIEW_TICK',       'Время сессии:');
define('LNG_REPORTS_BOT_RTIME_LAST',  'Бот был онлайн:');
define('LNG_REPORTS_VIEW_RTIME',      'Время отчета:');
define('LNG_REPORTS_VIEW_COUNTRY',    'Страна:');
define('LNG_REPORTS_VIEW_IPV4',       'IPv4:');
define('LNG_REPORTS_VIEW_COMMENT',    'Комментарий к боту:');
define('LNG_REPORTS_VIEW_COMMENT_SAVE',    'ОК');
define('LNG_REPORTS_VIEW_USED',       'В списке использованных:');
define('LNG_REPORTS_VIEW_PROCNAME',   'Процесс:');
define('LNG_REPORTS_VIEW_PROCINFO',   'Информация о процессе:');
define('LNG_REPORTS_VIEW_PROCUSER',   'Пользователь процесса:');
define('LNG_REPORTS_VIEW_REFERAL',    'Реферальная ссылка:');
define('LNG_REPORTS_VIEW_SOURCE',     'Источник:');
define('LNG_REPORTS_VIEW_TYPE',       'Тип:');
define('LNG_REPORTS_VIEW_SIZE',       'Размер (байты):');
define('LNG_REPORTS_VIEW_DOWNLOAD',   'Скачать файл "%s" (%s байт).');
define('LNG_REPORTS_VIEW_NEXTPAGE',   'Подгрузить ещё');

define('LNG_REPORTS_ASIDE_WHOIS',     'Whois');
define('LNG_REPORTS_ASIDE_FAVORITE0', 'В избранном');
define('LNG_REPORTS_ASIDE_FAVORITE1', 'Добавить в избранное');
define('LNG_REPORTS_ASIDE_SAVE',      'Сохранить');

define('LNG_REPORTS_ASIDE_HK',                          'HatKeeper');
define('LNG_REPORTS_ASIDE_HK_RULE_URL',                 'Маска URL');
define('LNG_REPORTS_ASIDE_HK_RULE_POST',                'Параметры POST');
define('LNG_REPORTS_ASIDE_HK_MKENVIRONMENT',            'Собрать окружение (Cookies)');
define('LNG_REPORTS_ASIDE_HK_BSOCKS',                   'Бекконнект SOCKS');
define('LNG_REPORTS_ASIDE_HK_CREATE',                   'Создать пресет');
define('LNG_REPORTS_ASIDE_HK_CONFIGLINK',               'HatKeeper XML конфиг');
