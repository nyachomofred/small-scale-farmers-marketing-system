<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use commom\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\Marketplace */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marketplace-form">
   
    <?php $form = ActiveForm::begin(); ?>

     <div class="row">
            <div class="col-sm-4">
                    <?= $form->field($model, 'product') ->dropDownList(
                            ['dry maize'=>'Dry maize',
                            'Millet'=>' Millet',
                            'Cassava'=>'Cassava',
                            'rice'=>'rice',
                            'Garlic'=>'Garlic',
                            'Sorghum'=>'Sorghum',
                            'Wheat'=>'Wheat',
                            'Beans Canadian'=>'Beans Canadian',
                            'Cassava'=>'Cassava',
                            'Green Gram'=>'Green Gram',
                            'Cowpeas'=>'Cowpeas',
                            'Groundnut'=>'Groundnut',
                            'Cabages'=>'Cabages',
                            'Bananas'=>'Bananas',
                            'Carrots'=>'Carrots',
                            'Tomatoes'=>'Tomatoes',
                            'Onions'=>'Onions',
                            'Chilies'=>'Chilies',
                            'Cassava'=>'Cassava',
                            'Cacumber'=>'Cacumber',
                            'Capsicum'=>'Capsicum',
                            'Passion Fruit'=>'Passion Fruit',
                            'Oranges'=>'Oranges',
                            'Lemon'=>'Lemon',
                            'Mangoes'=>'Mangoes',
                            'Pineapples'=>'Pineapple',
                            'Pawpaw'=>'Pawpaw',
                            'Avacado'=>'Avacado',
                            'kales'=>'Kales',
                            'Eggs(local)'=>'Eggs(local)',
                            'Eggs(grade)'=>'Eggs(grade)',
                            'Watermellon'=>'Watermellon',
                            'Arrowroot'=>'Arrowroot',
                            'Coriander'=>'Coriander',
                            'French Beans'=>'French beans',
                            'Strawberries'=>'Strawbarries',
                            'Irish potatoe'=>'Sweet Potatoe',
                            'Garden peas'=>'Garden peas',
                            'RoseMary'=>'RoseMary',
                            'Sugar Snap'=>'Sugar Snap',
                            'Mushrooms'=>'Mushrooms',
                            'Beetroot'=>'Beetroot',
                            'Pumkin'=>'Pumpkin',
                            'Aloevera leaves'=>'Aloevera Leaves',
                            'Butternut'=>'Butternut',
                            'Chia seeds'=>'Chia seeds',
                            'Spinach'=>'Spinach',
                            'Arrowroot'=>'Arrowroot',
                            'Soya beans'=>'Soya beans',
                            'Mrenda'=>'Mrenda',
                            'Arrowroot'=>'Arrowroot',
                            'Mitoo'=>'Mitoo',
                            'Coconut'=>'Coconut',
                            'Simsim'=>'Simsim',
                            'Sweet potatoe'=>'Sweet potatoes',
                            'Maize'=>'Maize'],['prompt'=>'select.......']);?> </div>
                
                  <div class="col-sm-4"> <?= $form->field($model, 'quantity')->textInput(['type'=>'number','min'=>1,'max'=>10000,'id'=>'quantity','value'=>0]) ?></div>
                  <div class="col-sm-4">    <?= $form->field($model, 'unit') ->dropDownList(
                            [ 'Kilogram'=>'Kilogram',
                              'Bunch'=>' Bunch',
                              'Pieces'=>'Pieces'],['prompt'=>'select.......']);?></div>

  </div>
  <div class="row">
         <div class="col-sm-4"><?= $form->field($model, 'price')->textInput(['type'=>'number','min'=>1,'max'=>10000,'id'=>'quantity','value'=>0]) ?></div>

         <div class="col-sm-4"><?= $form->field($model, 'name')->textInput(['maxlength' => true,'readOnly'=>true, 'value'=>Yii::$app->user->identity->firstname.'   '. Yii::$app->user->identity->lastname]) ?></div>

         <div class="col-sm-4"><?=$form->field($model, 'email')->textInput(['maxlength' => true, 'readOnly'=>true,'value'=>Yii::$app->user->identity->email]) ?></div>
</div>

  <div class="row">
         <div class="col-sm-4"><?=$form->field($model, 'phone')->textInput(['maxlength' => true, 'readOnly'=>true,'value'=>Yii::$app->user->identity->phonenumber]) ?></div>
         <div class="col-sm-4"><?= $form->field($model, 'location') ->dropDownList(
            ['kisumu'=>'kisumu',
            'nairobi'=>' nairobi',
            'mombasa'=>'mombasa',
            'kericho'=>'kericho',
            'machakos'=>'machakos',
            'Eldoret'=>'Eldoret',
            'Nakuru'=>'Nakuru',
            'Kericho'=>'kericho',
            'Kitui'=>'kitui',
            'busia'=>'busia',
            'Kisii'=>'kisii',
            'bungoma'=>'bungoma',
            'thika'=>'thika',
            'embu'=>'Embu',
            'kamata'=>'kamata',
            'Kagio'=>'kagio',
            'garisa'=>'garisa',
            'ngong'=>'ngong',
            'Kericho'=>'kericho',
            'Kitengela'=>'kitengela',
            'limuru'=>'limuru',
            'kirinyaga'=>'kirinyaga',
            'yala'=>'yala',
            'Kandiege'=>'kandiege',
            'Kanyamua'=>'kanyamwa',
            'mwiyogo'=>'mwiyogo',
            'matuu'=>'matuu',
            'Kosen'=>'kosen',
            'Kochia'=>'kochia',
            'nandihills'=>'nandihills',
            'Timboroa'=>'timbora',
            'Kericho'=>'kericho',
            'njihia'=>'njihia',
            'nyandarua'=>'nyandarua',
            'Kabete'=>'kabete',
            'yatta'=>'yatta',
            'Rongai'=>'Rongai',
            'Kithige'=>'kithige',
            'matopeni'=>'matopeni',
            'Khabongo'=>'khabongo',
            'tumeiyo'=>'tumeiyo',
            'Kwale'=>'kwale',
            'Kakichuma'=>'kakichuma',
            'Kibabi'=>'kibabi',
            'Kabula'=>'kabula',
            'mbita'=>'mbita',
            'Kuresoi'=>'kuresoi',
            'Kilgoris'=>'kilgoris',
            'cheptais'=>'cheptais',
            'muimui'=>'muimui',
            'chesuiriikaki'=>'chesikaki',
            'eldama'=>'eldama',
            'mara'=>'mara',
            'juja'=>'juja',
            'Kaboywo'=>'kaboywo',
            'matungu'=>'matungu',
            'Kibirichia'=>'kibirichia',
            'uasin'=>'uasin',
            'Kibos'=>'kibos',
            'narumori'=>'narumoru',
            'oloitokitok'=>'oloitokitoi',
            'marsabit'=>'marsabit',
            'ndabibi'=>'ndabibi',
            'baringo'=>'baringo',
            'olkarau'=>'olkarau',
            'ruiru'=>'ruiru',
            'Kongowea'=>'kongowea',
            'munyaka'=>'munyaka',
            'voi'=>'voi',
            'olkalau'=>'olkalau',
            'samburu'=>'samburu',
            'Kisima'=>'kisima',
            'Kericho'=>'kericho',
            'Karatina'=>'karatina',
            'Kapsabet'=>'kapsabet',
            'maragua'=>'maragua',
            'Kirima'=>'kirima',
            'satebi'=>'satebi',
            'gatundu'=>'gatundu',
            'ishihara'=>'ishihara',
            'chmichemi'=>'chemichemi',
            'Kaptumo'=>'kaptumo',
            'Kabianga'=>'kabianga',
            'wote'=>'wote',
            'maseno'=>'maseno',
            'lwanda'=>'lwanda',
            'homabey'=>'homabay',
            'Kendubay'=>'kendubay',
            'gichuiri'=>'gichuiri',
            'rumuruti'=>'rumuruti',
            'Kendubay'=>'kendubay',
            'njabini'=>'njabini',
            'maunarok'=>'maunarok',
            'transmara'=>'transmara',
            'Kamuingi'=>'kamuingi',
            'kamuingi'=>'kamuingi',
            'wamuti'=>'wamuti',
            'githakwa'=>'githakwa',
            'old donyo'=>'olddonyo',
            'nyeri'=>'nyeri',
            'narok'=>'narok',
            'sagana'=>'sagana',
            'wajir'=>'wajir',
            'migori'=>'migori',
            'bambe'=>'bamba',
            'ganze'=>'ganze',
            'golf coast II'=>'golf cost II',
            'imenti south'=>'imenti south',
            'siginon'=>'siginon',
            'mapenya'=>'mapenya',
            'chonyi'=>'chonyi',
            'hongwe'=>'hongwe',
            'chobe'=>'chobe',
            'Kericho'=>'kericho',
            'ngamani'=>'ngamani',
            'sabasaba'=>'baharini',

            'limuru'=>'limuru'],['prompt'=>'select.......']);?></div>
   <div class="col-sm-4"><?= $form->field($model, 'foto')->fileInput() ?></div>
</div>
<div class="row">
   <div class="col-sm-6"><?= $form->field($model, 'description')->textarea(['rows' => 6]) ?></div>
  
  </div>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-success','style'=>'width:300px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
