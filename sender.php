<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?
if ($_GET['asd']=="asd") {

		$content .= '<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #2e2e2e; line-height: 21px;">

    <table cellpadding="0" cellspacing="10" border="0" width="100%">
        <tr>
            <td valign="middle"><a href="#"><img alt="" style="border: 0;" src="data:image/png;base64,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" /></a>
            </td>
            <td valign="middle" width="100%"><p style="margin: 0; padding: 0; font-size: 24px; font-weight: bold;">Результат тестирования</p>
            </td>
            <td valign="middle">
               <a href="#" style="margin: 0px 10px;color: #487609; white-space: nowrap;">О тесте</a>
            </td>
            <td valign="middle">
               <a href="#" style="margin: 0px 10px;color: #487609; white-space: nowrap;">О компании</a>
            </td>
            <td valign="middle">
               <a href="#" style="margin: 0px 10px;color: #487609; white-space: nowrap;">Справка</a>
            </td>
        </tr>
    </table>
    <div style="margin: 30px 27px;">
        <p style="font-size: 16px; font-weight: bold;">Сильные стороны</p>
        <p>Ответственность, уравновешенность, хозяйственность – характерные черты людей твоего склада. Для них важно соблюдать традиции и установленные правила, они умеют ценить опыт, накопленный человечеством.</p>
        <p>Ты тонко чувствуешь состояние и настроение людей, умеешь сопереживать, ты создаешь и поддерживаешь атмосферу, в которой соблюдают нормы, традиции, правила взаимоотношений между людьми.  Тебе важно чувствовать себя полезным, нужным, иметь возможность заботиться о других людях. Ты проявляешь настойчивость и требовательность в отстаивании важных для тебя позиций,  во все остальных случаях,  проявляя дипломатичность и такт.</p>
        <p>Тебя также можно назвать человеком практичным, рациональным, который способен внести эффективность в деятельность, которой занимается.</p>
        <p>Тебе нравится искать варианты решений. Ты действуешь, потому что «я  хочу сделать». Тебе важно разделить ответственность с другими людьми. Ты не всегда видишь связь между собственными поступками и происходящими событиями.  Иногда ты можешь обвинять в своих неудачах других людей или обстоятельства.</p>
		<p>&nbsp;</p>
        <p style="font-size: 16px; font-weight: bold;">Качества, которые требуют развития</p>
        <p>Как правило, собственная самооценка и уверенность в своих силах. Соизмерение планов и возможностей. Иногда на выполнение работы, требуется больше времени, чем запланировано.</p>
		<p>&nbsp;</p>
        <p style="font-size: 16px; font-weight: bold;">Рекомендуемые профессии и области деятельности</p>
        <p>Люди твоего склада незаменимы там, где требуется точное выполнение стандартных правил и процедур и практическая помощь людям.</p>
        <ul style="font-weight: bold;">
            <li>cпециалист отдела комплектации</li>
            <li>логистик</li>
            <li>диспетчер</li>
            <li>координатор</li>
            <li>администратор</li>
            <li>личный помощник</li>
            <li>работник социальной службы</li>
            <li>юрисконсульт</li>
            <li>судья</li>
            <li>бухгалтер</li>
            <li>библиотекарь</li>
            <li>делопроизводитель</li>
            <li>фармацевт</li>
            <li>работник склада</li>
            <li>преподаватель</li>
            <li>музейный работник</li>
            <li>экскурсовод</li>
            <li>врач</li>
            <li>стоматолог,</li>
            <li>медицинский персонал</li>
            <li>ветеринар</li>
            <li>выпускающий редактор</li>
            <li>корректор</li>
        </ul>
        
        
        <!-- доп. контент размещать здесь -->
    
    
	</div>
</div>';
		
		$email = "alexander@tsymbal.su";
		$recipient = "sb@yevart.ru";
		$subject = "Пример работы e-mail рассылки (Proekt-PRO)";
		$mailheader = 'Content-type: text/html; charset="utf-8" \r\n';
		$mailheader .= "From: $email \r\n";
		$mailheader .= "Reply-To: $email \r\n";
		$mailheader .= "X-Mailer: PHP/".phpversion();
		mail($recipient, $subject, $content, $mailheader) or die("Error!");
	
}


?>
</body>
</html>