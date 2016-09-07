<?php

/* @var $this yii\web\View */
use yii\bootstrap\Tabs;
use yii\bootstrap\Carousel;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$this->title = 'АИС Отчет';
?>



<?php
                            
                            
                            echo Carousel::widget([
    'items' => [
        // the item contains only the image
        '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-01.jpg"/>',
        // equivalent to the above
        ['content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-02.jpg"/>'],
        // the item contains both the image and the caption
        [
            'content' => '<img src="http://twitter.github.io/bootstrap/assets/img/bootstrap-mdo-sfmoma-03.jpg"/>',
            'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
      //      'options' => [...],
        ],
    ]
]);
                            ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">


                        <?php
            
            echo Tabs::widget([
    'items' => [
        [
            'label' => 'Файл',
            'content' => 'Файл',
            'active' => true
        ],
        [
            'label' => 'Формы',
            'content' => 'Формы',
           // 'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Сетевая версия',
            'content' => 'Сетевая версия',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
        [
            'label' => 'Помощь',
            'content' => 'Помощь',
          // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
    ],
]);
            
            
            ?>
                    
                    
                    
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
                    
                    
                        <?php
            
            echo Tabs::widget([
    'items' => [
        [
            'label' => 'Мастер импорта',
            'content' => 'Мастер импорта',
            'active' => true
        ],
        [
            'label' => 'Мастер связи',
            'content' => 'Мастер связи',
           // 'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Мониторинг',
            'content' => 'Мониторинг',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
        [
            'label' => 'Главный вид',
            'content' => 'Главный вид',
          // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
        [
            'label' => 'Обновить',
            'content' => 'Обновить',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
              
        [
            'label' => 'Текущий пользователь',
            'content' => 'Текущий пользователь',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
    ],
]);
            
            
            ?>
                    
                    
                    
		</div>
	</div>
	<div class="row">
		
		<div class="col-md-2">
			<div class="panel-group" id="panel-946758">
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-721382">ФНС (НП)</a>
					</div>
					<div id="panel-element-721382" class="panel-collapse collapse out">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-521835">ПФР (НП)</a>
					</div>
					<div id="panel-element-521835" class="panel-collapse collapse out">
						<div class="panel-body">
							Anim pariatur cliche...
						</div>
					</div>
				</div>
                            
                            
                            
                            
                            <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-721567382">Росстат (НП)</a>
					</div>
					<div id="panel-element-721567382" class="panel-collapse collapse out">
						<div class="panel-body">
							Росстат
						</div>
					</div>
				</div>
                            
                            
                            <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-7212582">Росалкоголь (НП)</a>
					</div>
					<div id="panel-element-7212582" class="panel-collapse collapse out">
						<div class="panel-body">
							Росалкоголь
						</div>
					</div>
				</div>
                            
                            <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-7213157">Выписка из ЕГРЮЛ/ЕГРИП</a>
					</div>
					<div id="panel-element-7213157" class="panel-collapse collapse out">
						<div class="panel-body">
							Выписка из ЕГРЮЛ/ЕГРИП
						</div>
                                                                                       
					</div>
				</div>
                            
                            
                            <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946758" href="#panel-element-7213111">Связь с техподдержкой</a>
					</div>
					<div id="panel-element-7213111" class="panel-collapse collapse out">
						<div class="panel-body">
							Связь с техподдержкой
						</div>
					</div>
				</div>
                            
                            
                            <div class="panel panel-default">
					<div class="panel-heading">
						 <a class="panel-title" data-toggle="collapse" data-parent="#panel-946723" href="#panel-element-721323">Календарь</a>
					</div>
					<div id="panel-element-721323" class="panel-collapse collapse out">
						<div class="panel-body">
						
                                                    <a href="http://localhost:8888/docs/frontend/web/index.php?r=site%2Fabout">Календарь</a>
						</div>
					</div>
				</div>
                            
                            
                       
                            
			</div>
		</div>
		
            
            <div class="col-md-8">
	
                    
                    
                    
                
                
                
    <?php
    
    
    
    
    $query = frontend\models\Data::find();

$provider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => [
            'created_at' => SORT_DESC,
            'title' => SORT_ASC, 
        ]
    ],
]);
    
    

    //$dataPost=ArrayHelper::map(\frontend\models\Data::find()->asArray()->all(), 'id', 'email');
    echo $form->field(new \frontend\models\Data(), 'id')->dropDownList(
    [],
    [
        'prompt' => 'Fəaliyyət sahəsini seçin',
        'id' => 'emeliyyatlar'
    ]
);
    ?>
</div>
                
                
                
                    
                    <?php
                    
                    
                    $dataProvider = new ActiveDataProvider([
    'query' => frontend\models\Data::find(),
    'pagination' => [
        'pageSize' => 10,
    ],
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-bordered'
        ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        // Обычные поля определенные данными содержащимися в $dataProvider.
        // Будут использованы данные из полей модели.
           
        [
               'label' =>"Статус", // название столбца
               'attribute' => 'status', // атрибут 
               'value'=>function($data){return $data["status"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
                   
                   [
               'label' =>"Налогоплательщик", // название столбца
               'attribute' => 'fio', // атрибут 
               'value'=>function($data){return $data["fio"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
        
                     [
               'label' =>"ИНН/КПП", // название столбца
               'attribute' => 'inn', // атрибут 
               'value'=>function($data){return $data["inn"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
                   
                         [
               'label' =>"Код ИФНС", // название столбца
               'attribute' => 'ifns', // атрибут 
               'value'=>function($data){return $data["ifns"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
              
              
                   
                    [
               'label' =>"КНД", // название столбца
               'attribute' => 'knd', // атрибут 
               'value'=>function($data){return $data["knd"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
             
                   
                          [
               'label' =>"Описание", // название столбца
               'attribute' => 'desc', // атрибут 
               'value'=>function($data){return $data["desc"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
                   
                                  [
               'label' =>"Период", // название столбца
               'attribute' => 'period', // атрибут 
               'value'=>function($data){return $data["period"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
                                      [
               'label' =>"Вариант", // название столбца
               'attribute' => 'var', // атрибут 
               'value'=>function($data){return $data["var"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
            
                                             [
               'label' =>"Дата отправки", // название столбца
               'attribute' => 'data', // атрибут 
               'value'=>function($data){return $data["data"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
                   
                                                     [
               'label' =>"Квитанция", // название столбца
               'attribute' => 'kvit', // атрибут 
               'value'=>function($data){return $data["kvit"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
             
                   
                                            [
               'label' =>"Протокол", // название столбца
               'attribute' => 'prot', // атрибут 
               'value'=>function($data){return $data["prot"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
                   
             
                   
                                            [
               'label' =>"Имя файла", // название столбца
               'attribute' => 'fname', // атрибут 
               'value'=>function($data){return $data["fname"];} // объявлена анонимная функция и получен элемент массива (заголовок)
           ],
        
                   
                   
    ],
]);


?>
                    
                    
        
                    
                    
                    
                  
		</div>
	</div>
	<div class="row">
            
            
		
            
            
            <?php
            
            echo Tabs::widget([
    'items' => [
        [
            'label' => 'Печать',
            'content' => 'Печать',
            'active' => true
        ],
        [
            'label' => 'Экспорт',
            'content' => 'Экспорт',
            //'headerOptions' => [...],
            //'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Редактировать',
            'content' => 'Редактировать',
            //'options' => ['id' => 'myveryownID'],
            
        ],
        
    ],
]);
            
            
            ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
			<div class="tabbable" id="tabs-582157">
			
                            
                                
            <?php
            
            echo Tabs::widget([
    'items' => [
        [
            'label' => 'Сводная информация',
            'content' => 'Сводная информация',
            'active' => true
        ],
        [
            'label' => 'Декларация',
            'content' => 'Декларация',
           // 'options' => ['id' => 'myveryownID'],
        ],
        [
            'label' => 'Квитанция о приеме',
            'content' => 'Квитанция о приеме',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
        [
            'label' => 'Извещение о получении',
            'content' => 'Извещение о получении',
          // 'options' => ['id' => 'myveryownID'],
            
        ],
        
        
        [
            'label' => 'Уведомление об уточнении',
            'content' => 'Уведомление об уточнении',
           // 'options' => ['id' => 'myveryownID'],
            
        ],
        
              
        
    ],
]);
            
            
            ?>
      
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
			</div>
		</div>
	</div>
</div>