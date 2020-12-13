<?php
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = 'Create Request';
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" type="text/css" href="/css/sign_up_modal_after.css">
<link rel="stylesheet" type="text/css" href="/css/create_event.css">
<div class="request-create">

    <div class="main">
        <div class="rule-div">
            <div class="rule_tittle">Создать мероприятие</div>
            <div class="rules">Чтобы провести мероприятие на нашей прощадке, соблюдайте некоторые правила:<br>
                регистрация производится только на этой платформе;<br>
                участие бесплатно.
            </div>
        </div>
        <form action="/request/create" method="post">
            <div class="main_info">
                <div class="head_title">
                    Основная информация
                </div>
                <div class="main_info_data">
                    <div class="text_data">
                        <div class="event_tittle">
                            <div class="title">Название*</div>
                            <input placeholder="Введите название мероприятия" type="text" name="Request[title]">
                        </div>
                        <div class="availability">
                            <div class="title">Доступность*</div>
                            <div class="radio-div">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male" style="margin-right:52px;">Для всех желающих</label>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Отбор участников</label>
                            </div>
                        </div>
                        <div class="description">
                            <div class="title">Описание*</div>
                            <textarea name="Request[desc]" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    
                    
                    <div class="load_photo">
                        <div>
                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                            <label for="file"><span><strong>Choose a file</strong></span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="date_time">
                <div class="head_title">Время и дата</div>
                <div class="date_time_block">
                    <div class="date_time_block_info">
                        <div class="start_reg">
                            <div class="title">Начало регистрации*</div>
                            <? echo DateTimePicker::widget([
                                'name' => 'event_time',
                                // 'value' => '12/31/2010 05:10:20',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'mm-dd-yyyy hh:ii:ss'
                                ]
                            ]);?>
                            <div class="title" style="margin-left: 276px;">Время начала*</div>
                               <? echo DateTimePicker::widget([
                                'name' => 'Request[start]',
                                // 'value' => '12/31/2010 05:10:20',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'mm-dd-yyyy hh:ii:ss',
                                    'daysOfWeekDisabled' => '1,2,5',
                                    'hoursDisabled' => '0,1,2,3,4,5,6,7,8,19,20,21,22'
                                ]
                            ]);?>
                            <!-- <input class="time_reg" type="text"> -->
                        </div>
                        <div class="finish_reg">
                            <div class="title">Конец регистрации*</div>
                            <? echo DateTimePicker::widget([
                                'name' => 'Request[register_end]',
                                // 'value' => '12/31/2010 05:10:20',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'mm-dd-yyyy hh:ii:ss',
                                ]
                            ]);?>
                            <div class="title" style="margin-left: 276px; margin-right: 9px;">Время конца*</div>
                            <? echo DateTimePicker::widget([
                                'name' => 'Request[end]',
                                // 'value' => '12/31/2010 05:10:20',
                                'pluginOptions' => [
                                    'autoclose' => true,
                                    'format' => 'mm-dd-yyyy hh:ii:ss',
                                        'daysOfWeekDisabled' => '1,2,5',
                                        'hoursDisabled' => '0,1,2,3,4,5,6,7,8,19,20,21,22'
                                ]
                            ]);?>
                        </div>
                        <!-- <div class="event_date">
                            <div class="title">День(дни) проведения мероприятия*</div>
                            <div class="start_end_event_input"></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="speakers">
                <div class="head_title">Спикеры</div>
                <div class="speakers_block">
                    <div class="speakers_block_info">
                        <div class="title">Пригласите спикеров используя их электронную почту.</div>
                        <input placeholder="" class="search_email" type="text">
                        <div class="speakers_name"></div>
                    </div>
                </div>
            </div>
            <div class="competences">
                <div class="head_title">Компетенции мероприятия</div>
                <div class="competences_block">
                    <div class="competences_block_info">
                        <div class="title">Выберите компетенции, которые развивает ваше мероприятие</div>
                        <div class="competences-list">
                                <ul>
                                    <li>
                                        <input type="radio" label="Бизнес стратегия" id="biz">
                                        <label for="biz">Бизнес стратегия</label>

                                    </li>
                                    <li>
                                        <input type="radio" label="Тимбилдинг" id="team">
                                        <label for="team">Тимбилдинг</label>
                                    </li>
                                    <li>
                                        <input type="radio" label="Промышленность" id="team">
                                        <label for="team">Промышленность</label>
                                    </li>
                                    <br/>
                                    <li>
                                        <input type="radio" label="Маркетинг" id="team">
                                        <label for="team">Маркетинг</label>
                                    </li>
                                    <li>
                                        <input type="radio" label="" id="team">
                                        <label for="team">Большие данные</label>
                                    </li>
                                    <li>
                                        <input type="radio" label="Тимбилдинг" id="team">
                                        <label for="team">Предпринимательство</label>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal3" class="modal fade">
        <div class="form">
            <div class="form_modal2">
                <div class="form_data">
                    <div class="form_text">
                        Заявка на мероприятие отправлена на модерацию<br><br>
                        Вам ответят на почту в течении нескольких дней.
                    </div>
                    <div class="buttons-div" >
                        <button type="submit" style="margin: auto auto;" class="create_lk">ОК</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </form>
        <button data-toggle="modal" data-target="#modal3" id="create_event">
                    Создать событие
                </button>
    </div>
    


    <!-- <?= $this->render('_form', ['model' => $model,]) ?> -->
    <?

    $script = <<< JS
    var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
    {
        var label	 = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener( 'change', function( e )
        {
            var fileName = '';
            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
                fileName = e.target.value.split("\\\").pop();

            if( fileName )
                label.querySelector( 'span' ).innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });
    });
JS;
$this->registerJs($script);
    ?>

</div>
