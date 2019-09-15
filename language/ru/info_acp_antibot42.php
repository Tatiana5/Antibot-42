<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_ANTIBOT42'						=> 'Antibot 42',
	'ACP_ANTIBOT42_SETTINGS'			=> 'Настройка',
	'ACP_ANTIBOT42_SETTINGS_EXPLAIN'	=> 'Another way to eliminate spam on your forum. Maybe the best.',

	'ACP_ANTIBOT42_REG'					=> 'Включить защиту',
	'ACP_ANTIBOT42_REG_EXPLAIN'			=> 'Если на вашем сайте встречаются спам-боты, зарегистрированные вручную, включите защиту и для зарегистрированных пользователей. В противном случае достаточно включить для гостей.',
	'ACP_ANTIBOT42_REG_OPTION_1'		=> 'Для гостей и зарегистрированных',
	'ACP_ANTIBOT42_REG_OPTION_0'		=> 'Только для гостей',

	'ACP_ANTIBOT42_LOG'					=> 'Вести лог',
	'ACP_ANTIBOT42_LOG_EXPLAIN'			=> 'В лог записываются неудачные попытки регистрации и постинга, а также случаи удачной регистрации для сравнительной статистики.',

	'ACP_ANTIBOT42_GEOIP'				=> 'Использовать GeoIP',
	'ACP_ANTIBOT42_GEOIP_EXPLAIN'		=> 'Географическое положение ботов добавляется в лог. Если ваш сайт атакуют толпы ботов, эта функция может увеличить нагрузку на сервер.',

	'ACP_ANTIBOT42_METHODS_NOTICE'		=> 'Следующие параметры нужны для тестирования расширения. Если не собираетесь участвовать в тестировании, оставьте все пункты включёнными.',

	'ACP_ANTIBOT42_METHOD1'				=> 'Метод обнаружения ботов №1',
	'ACP_ANTIBOT42_METHOD1_EXPLAIN'		=> 'Применяется к формам регистрации, постинга и связи с администрацией.',
	'ACP_ANTIBOT42_METHOD2'				=> 'Метод обнаружения ботов №2',
	'ACP_ANTIBOT42_METHOD2_EXPLAIN'		=> 'Применяется к формам регистрации, постинга и связи с администрацией.',
	'ACP_ANTIBOT42_METHOD3'				=> 'Метод обнаружения ботов №3',
	'ACP_ANTIBOT42_METHOD3_EXPLAIN'		=> 'Применяется к форме регистрации.',
	'ACP_ANTIBOT42_METHOD4'				=> 'Метод обнаружения ботов №4',
	'ACP_ANTIBOT42_METHOD4_EXPLAIN'		=> 'Применяется к форме регистрации.',
	'ACP_ANTIBOT42_METHOD5'				=> 'Метод обнаружения ботов №5',
	'ACP_ANTIBOT42_METHOD5_EXPLAIN'		=> 'Применяется к формам регистрации, постинга, связи с администрацией, отправки email и отправки личных сообщений. Используйте этот метод с осторожностью: он может вызвать проблемы у пользователей, которые отключили JavaScript в своих браузерах.',

	'ACP_ANTIBOT42_LOG_TEXT'			=> 'Лог',
	'ACP_ANTIBOT42_LOG_COPY'			=> 'Копировать',
	'ACP_ANTIBOT42_LOG_COPIED'			=> 'Лог скопирован в буфер обмена.',
	'ACP_ANTIBOT42_LOG_DELETE'			=> 'Удалить',
	'ACP_ANTIBOT42_LOG_DELETE_CONFIRM'	=> 'Удалить лог расширения Antibot 42? Точно?',
	'ACP_ANTIBOT42_LOG_DELETE_SUCCESS'	=> 'Лог удалён.',
	'ACP_ANTIBOT42_LOG_NOT_READABLE'	=> 'Файл лога %s или его папка отсутствуют или недоступны для чтения.',
	'ACP_ANTIBOT42_LOG_NOT_WRITABLE'	=> 'Файл лога %s или его папка отсутствуют или недоступны для записи.',

	'ACP_ANTIBOT42_GEOIP_NO_DB'			=> 'Функция GeoIP включена, но базы данных GeoIP не найдены. <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">Скачайте их</a> (как минимум базу GeoLite2 Country) и распакуйте в папку %s.',
	'ACP_ANTIBOT42_GEOIP_COUNTRY_ONLY'	=> 'Сейчас GeoIP отображает только страну спам-бота. Чтобы отображался также и город, <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">скачайте базу городов</a> и распакуйте её в папку %s.',

	'ACP_ANTIBOT42_NOTICE'				=> '
		Если вы хотите помочь нам <b>улучшить защиту от спам-ботов</b>, сделайте следующее:
		<ul>
			<li>протестируйте и сообщите нам, какой метод обнаружения ботов работает лучше на вашем сайте (1-й день — 1-й метод, 2-й день — 2-й метод и т.д.);</li>
			<li>временно отключите другие средства против спам-ботов, в том числе и капчу, и сообщите нам, насколько оказался эффективен Antibot 42 сам по себе;</li>
			<li>временно разрешите гостевой постинг и сообщите нам, появился ли спам;</li>
			<li>скопируйте и пришлите нам лог, когда в нём накопится 200-300 строк или больше.</li>
		</ul>
		Лог не содержит никакой информации о вашем сайте и пользователях (кроме IP-адресов ботов).<br />
		Вы найдёте нас там: <a href="https://phpbbguru.net/community/">https://phpbbguru.net/community/</a>',

	'ACP_ANTIBOT42_VERSION_ALERT'		=> 'Некоторые функции этого расширения отключены из-за их несовместимости с вашей версией phpBB. <br /> Защита от спам-ботов ослаблена. Рекомендуемая версия phpBB: 3.2.2 или выше.',
));