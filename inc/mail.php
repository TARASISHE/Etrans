<?php
function send_mail(){
    $adminMail = carbon_get_theme_option('email');
    ///data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $form_id = $_POST['form_id'];
    $data_weight = $_POST['data_weight'];
    ////mail
    $to = $adminMail;
    if($form_id == 'get-price'){
        $subject = 'Новая заявка';
        $message = '<h2>Заявка на расчет стоимости</h2>
        <p>Имя клиента: <strong>'.$name.'</strong></p>
    <p>Телефон клиента: <strong>'.$phone.'</strong></p>
    ';
    }else if($form_id == 'get-transport'){
        $subject = 'Новая заявка';
        $message = ' <h2>Заявка на выбор транспорта</h2>
        <p>Имя клиента: <strong>'.$name.'</strong></p>
    <p>Телефон клиента: <strong>'.$phone.'</strong></p>
    <p>Транспорт до: '.$data_weight.' тонн</strong></p>
    ';
    }else if($form_id == 'get-info'){
        $subject = 'Новая заявка';
        $message = ' <h2>Заявка на консультацию</h2>
        <p>Имя клиента: <strong>'.$name.'</strong></p>
    <p>Телефон клиента: <strong>'.$phone.'</strong></p>
    ';
    }
    $headers = array(
        'From: Etrans  <admin@e-trans.com.ua>',
        'content-type: text/html',
        'Cc:'. $adminMail.'',
        'Cc: admin@e-trans.com.ua', // тут можно использовать только простой email адрес
    );

    $mail = wp_mail( $to, $subject, $message, $headers );
    echo json_encode(array('success'=> $mail));
    wp_die();
};

function main_form(){
    $adminMail = carbon_get_theme_option('email');
    ///data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $fromPoint = $_POST['fromPoint'];
    $toPoint = $_POST['toPoint'];
    $date = $_POST['date'];
    $productType = $_POST['productType'];
    $transportType = $_POST['transportType'];
    $weight = $_POST['weight'];
    $metrcis = $_POST['metrics'];
    ////mail
    $to =  $adminMail;
    $subject = 'Новая заявка';
    $message = '
    <h2>Главная форма</h2>
    <p>Имя клиента:<strong> '.$name.'</strong></p>
    <p>Телефон клиента:<strong>  '.$phone.'</strong></p>
    <p>Город отправления:<strong>  '.$fromPoint.'</strong></p>
    <p>Город выгрузки:<strong>  '.$toPoint.'</strong></p>
    <p>Дата отправления:<strong>  '.$date.'</strong></p>
    <p>Описание груза:<strong>  '.$productType.'</strong></p>
    <p>Тип кузова:<strong>  '.$transportType.'</strong></p>
    <p>Вес груза(тонн):<strong>  '.$weight.' </strong></p>
    <p>Габариты груза:<strong>  '.$metrcis.' </strong></p>
    ';
    $headers = array(
        'From: Etrans  <admin@e-trans.com.ua>',
        'content-type: text/html',
        'Cc:'. $adminMail.'',
        'Cc: admin@e-trans.com.ua', // тут можно использовать только простой email адрес
    );
$mail = wp_mail( $to, $subject, $message, $headers );
 echo json_encode(array('success'=> $mail));
    wp_die();
};

function client_message(){
    $adminMail = carbon_get_theme_option('email');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $clientMessage = $_POST['message'];
     ////mail
     $to =  $adminMail;
     $subject = 'Сообщение от клиента';
     $message = '
    <p>Имя клиента:<strong> '.$name.'</strong></p>
    <p>Почта клиента:<strong>  '.$email.'</strong></p>
    <p>Сообщение:<strong>  '.$clientMessage.'</strong></p>';

    $headers = array(
        'From: Etrans  <admin@e-trans.com.ua>',
        'content-type: text/html',
        'Cc:'. $adminMail.'',
        'Cc: admin@e-trans.com.ua', // тут можно использовать только простой email адрес
    );
    $mail = wp_mail( $to, $subject, $message, $headers );
    echo json_encode(array('success'=> $mail));
    wp_die();
}