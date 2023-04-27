<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
/////////Fields for Blog page/////////////////////////
Container::make( 'post_meta', 'Контент' )
	->where( 'post_id', '=', pll_get_post(8) )
	->add_fields(
	array(
        Field::make( 'media_gallery', 'about_process_media', __( 'Галерея процеса работы' ) ),
        Field::make( 'complex', 'staff-slider' , 'Штаб команды')
    ->add_fields( array(
        Field::make( 'text', 'staff-name', 'Имя' ),
        Field::make( 'text', 'staff-age', "Возраст" ),
        Field::make( 'text', 'staff-info', "Описание" ),
        Field::make( 'image', 'staff-photo', "Фото"),
    )),
    Field::make( 'complex', 'owners' , 'Штаб команды')
    ->add_fields( array(
        Field::make( 'text', 'name', 'Имя' ),
        Field::make( 'text', 'position', "Должность" ),
        Field::make( 'text', 'info', "Описание" ),
        Field::make( 'text', 'telegram', "Телеграм ссылка" ),
        Field::make( 'text', 'email', "Почтовый емайл" ),
        Field::make( 'image', 'photo', "Фото"),
    )),
	)
        );
////////////////Fields for Cases////////
Container::make( 'post_meta', 'Содержимое кейса' )
	->where( 'post_type', '=', 'case' )
	->add_fields(
	array(
        Field::make( 'text', 'target', "Задача" ),
        Field::make( 'text', 'time', "Сроки" ),
        Field::make( 'text', 'weight', "Вес" ),
        Field::make( 'text', 'info', "Решение" ),
  
	)
        );
/////////////Fields for Services////////////
Container::make( 'post_meta', 'Доп поля' )
	->where( 'post_type', '=', 'services' )
	->add_fields(
	array(
        Field::make( 'text', 'main-name', "Название для страницы услуги" ),
  
	)
        );
///////Theme settings
Container::make( 'theme_options','crb_theme_info', 'Личные настройки ' )
        ->add_tab( __( 'Контактная информация' ), array(
        Field::make( 'text', 'email', 'Почта' ),
        Field::make( 'text', 'adress', 'Адрес' ),
        Field::make( 'complex', 'numbers' , 'Номера телефонов')
        ->add_fields( array(
        Field::make( 'text', 'num', 'Номер' ) 
        ))
        )
        )
        ->add_tab( __( 'Документы' ), array(
                Field::make( 'complex', 'main_docs' , 'Документы на главной ')
                ->add_fields( array(
                        Field::make( 'image', 'crb_image', __( 'Фото' ))
                )),
                Field::make( 'image', 'dill_image', __( 'Договор' ))
        ))
        ;
/////////////News Fields///////////////
Container::make( 'post_meta','crb_news_info', 'Контент' )
        ->where( 'post_type', '=', 'news' )
        ->set_context( 'carbon_fields_after_title' )
	->add_fields(
	array(
        Field::make( 'textarea', 'preview', __( 'Предпросмотр' ))
        )
        );

Container::make( 'post_meta','crb_services_info', 'Контент' )
        ->where( 'post_id', '=', '29', '211' )
	->add_fields(
	array(
                Field::make( 'complex', 'services' , 'Услуги')
                ->add_fields( array(
                    Field::make( 'text', 'name', 'Название' ),
                    Field::make( 'image', 'image', "Картинка" ),
                    Field::make( 'text', 'url', "Ссылка" ),
                ))
        )
        );


Container::make( 'theme_options','crb_ourClients_info', 'Наши клиенты' )
->set_icon( 'dashicons-admin-users' )
->set_page_menu_position( 2 )
                ->add_fields(
                        array(
                                Field::make( 'complex', 'clients-complex' , 'Наши клиенты ')
                                ->add_fields( array(
                                Field::make( 'image', 'image', __( 'Лого клиента' ))
                ))
                        )
                )
        
        ;