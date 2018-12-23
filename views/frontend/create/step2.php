<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use kouosl\anket\models\Survey;
use kouosl\anket\models\Questions;
use yii\widgets\Pjax;

$this->title = 'Step2';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] =['label' => 'Anket','url'=>'/anket'];
$this->params['breadcrumbs'][] =['label' => 'Create','url'=>'/anket/create'];
$this->params['breadcrumbs'][] = $this->title;

?>
<script>

function ac(p1){
    var index=p1.id;
    index=index.substring(1,2);
if(p1.value!='textInput'){

  document.getElementById(('o'+index)).style.display="block";
  document.getElementById(('o'+index)).setAttribute('required','true');
}
else{
  document.getElementById(('o'+index)).style.display="none";
  document.getElementById(('o'+index)).setAttribute('required','false');
}
}

</script>

<style>
.row{
    background-color:#f5f5f5;
    padding:25px;
    border-radius:25px;
    
}
.col-lg-5{
    margin-left: 350px;
}
h1{
    text-align:center;
    color:crimson;
    font-family: "Century gothic";
}
.btn-primary{
margin-left:170px;
margin-top:20px;
}

</style>
<div class="row">
<h1>Step 2</h1>
<hr>

        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['enableClientValidation'=>false]); ?>
            
            
            <?php foreach($models as $index=>$model){ ?> 
                <?php
                 if(!isset($_SESSION['q'.$index]['name'])){
                    $_SESSION['q'.$index]['name']="";$_SESSION['q'.$index]['type']="";$_SESSION['q'.$index]['required']="";$_SESSION['q'.$index]['option_number']="";
                }
                ?>   

             <div style="border:2px solid black;margin-top: 10px; padding: 25px;border-radius:10px;">      
<<<<<<< HEAD
               
=======
               <?= $form->field($model, "[$index]s_id")->textInput(['autofocus' => true ,'required'=>true, 'value'=>131,'readonly'=>true]) ?>
>>>>>>> 319d19a795c370e5280d3149f01e399a5b50c858

                <?= $form->field($model, "[$index]name")->textInput(['autofocus' => true ,'required'=>true,'value'=>$_SESSION['q'.$index]['name']])->label(($index+1).".Soruyu Giriniz:") ?>

                <?= $form->field($model, "[$index]type")->dropDownList(['textInput'=>'Text','radio'=>'Radio','checkbox'=>'Checkbox'],['id'=>('d'.$index),'onchange'=>'ac(this)','value'=>$_SESSION['q'.$index]['type']])?>
                
                
                <?= $form->field($model, "[$index]required")->dropDownList(['0'=>'Hayır','1'=>'Evet'],['value'=>$_SESSION['q'.$index]['required']])->label("Cevaplanması Gerekli mi ?")?>


                <?= $form->field($model, "[$index]option_number")->textInput(['required' => false ,'id' => ('o'.$index) ,'style' => 'display:none' ,'type'=>'number','value'=>$_SESSION['q'.$index]['option_number']])?>

                
             </div>
            <?php }?> 


                <div class="form-group">
                    <?= Html::submitButton('Devam et', ['class' => 'btn btn-primary']) ?>
<<<<<<< HEAD
                    <?= \yii\helpers\Html::a( 'Geri', 'step1',['class' => 'btn btn-success' ,'style'=>'color:black;margin-top:20px']);?>
                    
=======
                    <?= \yii\helpers\Html::a( 'Back', 'step1');?>
>>>>>>> 319d19a795c370e5280d3149f01e399a5b50c858
                </div>
              



            <?php ActiveForm::end(); ?>
        </div>
    </div>



</div>


