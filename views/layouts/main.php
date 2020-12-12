<html>
<? use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<? $this->beginPage();?><!--  Тригер для бутстрапа -->

        <head>
            <title>СТАРТАП-ДЕПО</title>
            <? $this->head();?><!--  Тригер для бутстрапа -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" type="text/css" href="/css/header.css">
            <link rel="stylesheet" type="text/css" href="/css/modal_reg.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        </head>
        <body>
        <? $this->beginBody();?><!--  Тригер для бутстрапа -->
        <header>
        <div class="data">
            <div>
                <a href="/"><img src="../templates/logo.svg" alt="" class="logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/request/">Мероприятия</a></li>
                    <li><a href="#">Трансляции</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
            </div>
            <div class="autorization">
                <div class="menu" style="margin: 0">
                <? if (Yii::$app->user->isGuest) { ?>
                    <ul>
                        <li><a href="/user/login">Вход</a></li>
                        <li><a data-toggle="modal" data-target="#modal-reg" href="/user/join">Регистрация</a></li>
                    
                    </ul>
                <?  }  else {?>
                    <ul>
                        <li><a href="#"><?= Yii::$app->user->identity->name ?></a></li>
                        <li><a href="/user/logout">Выйти</a></li>
                    </ul>
                    <? } ?>
                </div>
            </div>
        </div>
        </header>
        <!-- <?
           NavBar::begin([
            'brandLabel'=>'Finance',
             'brandUrl'=> Yii::$app->homeUrl,
             'options'=>
             [
                     'class' => 'navbar-default navbar-fixed-top'
             ],
    ]);

    if (Yii::$app->user->isGuest)
    $menu =[
      ['label'=>'Join','url'=>['/user/join']],
        ['label'=>'Log in','url'=>['/user/login']],
    ];
    else
        $menu =[
            ['label'=>Yii::$app->user->getIdentity()->name],
            ['label'=>'Logout','url'=>['/user/logout']],
        ];
    echo Nav::widget([
            'options'=>['class'=>'navbar-nav navbar-right'],
        'items'=>$menu
    ]);
     NavBar::end();
 ?> -->
        <div class="container" style="margin-top: 80px ">

        <?=$content?>
        
        </div>
        <div class="modal-reg modal fade" id="modal-reg">
                <div class="blur"></div>
                <div class="form">
                    <form action="/user/join" method="post">
                    <div class="form_modal-reg">
                        <div class="form_data">
                            <div class="field-input">
                                <div class="field-title">
                                    ФИО
                                </div>
                                <div>
                                    <input placeholder="Введите имя" class="field-input-div" type="text" id="userjoinform-name" name="UserJoinForm[name]">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    Номер телефона
                                </div>
                                <div>
                                    <input placeholder="Введите телефон" class="field-input-div" type="text" id="userjoinform-number" name="UserJoinForm[number]">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    E-mail
                                </div>
                                <div>
                                    <input placeholder="Эл. почта" class="field-input-div" type="text" id="userjoinform-email" name="UserJoinForm[email]">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    Придумайте пароль
                                </div>
                                <div>
                                    <input class="field-input-div" type="password" id="userjoinform-password" name="UserJoinForm[password]">
                                </div>
                            </div>
                            <div class="field-input">
                                <div class="field-title">
                                    Повторите пароль
                                </div>
                                <div>
                                    <input class="field-input-div" type="password" id="userjoinform-password2" name="UserJoinForm[password2]">
                                </div>
                            </div>
                            <div style="display: flex; margin-top: 19px;">
                                <input class="checkbox-div" type="checkbox">
                                <div class="checkbox_text">
                                    Даю своё <a href="google.com" style="color: #E21C1C;text-decoration: none;">согласие</a> на обработку персональных данных...
                                </div>
                            </div>
                            <button id="submit_event">Зарегистрироваться</button>
                            <div class="reg_other">
                                <div class="reg-text">Войти с помощью</div>
                                <div class="reg-icon">
                                    <div style="background: url(../templates/vk_icon.svg) no-repeat center center;"></div>
                                    <div style="background: url(../templates/facebook_icon.svg) no-repeat center center; margin: 0 20px 0 20px;"></div>
                                    <div style="background: url(../templates/gmail_icon.svg) no-repeat center center;"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        <? $this->endBody();?><!--  Тригер для бутстрапа -->
        </body>


</html>
<? $this->endPage();?><!--  Тригер для бутстрапа -->

