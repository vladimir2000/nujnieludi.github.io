<?php
$token = "5171394641:AAH3URQknZNSc8cS3cTtJGzP1TrHeCwLexc";

$chat_id = "-1001642035907";

if ($_POST['act'] == 'order') {
    $name = ($_POST['uname']);
    $phone = ($_POST['phone']);
    $prepod = ($_POST['prepod'])

    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone
        'Преподаватель' => $prepod
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        header('Location: index.html');
    }

    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
}
?>