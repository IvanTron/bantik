<?php
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Url;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;
use app\models\Product;
use app\models\Comment;
use yii\base\Model;
use yii\widgets\Pjax;
use app\models\EntryForm;
$this->title = 'Bantik.ru';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

  <!-- Laoding page  -->
  <div class="preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <!-- End Laoding page  -->
  <!-- Begin HorizontalTab style 6 -->
  <section class="section-full image-bg">

    <div class="container">

      <div class="row">

        <div class="col-md-12">
          <a href="вапвыа" ><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="img/logo.png"></div></a>
          
          <!-- Begin .HorizontalTab -->
          <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            <ul class="resp-tabs-list hor_1">
              <a href="admin/index.php"><div class="logo"><img src="img/logo.png"></div></a>
              <li  data-tab-name="profile"><span class="tabs-text">Добро пожаловать</span></li>
              <li  data-tab-name="resume"><span class="tabs-text">Немного обо мне</span></li>
              <li  data-tab-name="portfolio"><span class="tabs-text">Мои работы</span></li>             
              <li  data-tab-name="comment"><span class="tabs-text">Оставить комментарий</span></li>
              <li  data-tab-name="contact"><span class="tabs-text">Сделать заказ</span></li>
            </ul>
            
            <div class="resp-tabs-container hor_1 tabs_scroll">
              
              <div class="fc-tab-1">
              
                <div class="home-container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="left-content">
                        <div class="left-line"></div>  
                        <h2>Креативаные &amp; уникальные <em>банты</em></h2>
                        <p>Я создаю удивительные <em>БАНТЫ</em>, которые удивят не только вас, но и окружающих Вас людей. Все банты по <em>не дорогой</em> цене.        









                          </p>

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="right-content">
                        <img src="img/default/bant.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fc-tab-2">
              
                <div class="about-container">
                  <div class="row">
                    <div class="col-md-12">
                      <h2>Немного обо <em>Мне</em></h2>
                      <div class="under-line"></div>
                      <p>Я занимаюсь изготовление бантов уже на протяжении 2-х лет. В свои изделия я вкладываю частичку души дабы бант излучал безудержную красоту и удивление.


                      </p>
                      <img src="img/default/about_image.jpg" height="400px">
                    </div>
                  </div>
                </div>
              </div>
            <div class="fc-tab-3">
               
                <div class="owl-carousel owl-theme projects-container">
                    <?php
                    $product = Product::find()->all();
                     foreach ($product as $key => $value) {
                 ?>
                 

                    <div class="project-item">

                      <div class="thumb-holder">

                        <div class="hover-effect">

                          <div class="hover-content">
                            <h4><?php echo $value->title;?></h4>
                            <?php
                              echo "<a href='img/bant/big/".$value->big_img."' data-lightbox='image-1'><img src='img/project-icon.png'></a><br>Цена:".$value->price." руб.<br>";
                              echo "<button id='".$value->id."' class='btn_order'>Заказать</button>";
                              ?>
                          </div><!--end hover-content-->                                  
                        </div><!--end hover-effect-->
                        <?php echo "<img src='img/bant/small/".$value->small_img."'>";?>
                      </div><!--end thumb-holder-->
                    </div><!--end project-item-->
                   <?php
                  }
                   ?> 
                </div><!--end owl-carousel owl-theme projects-container-->
              </div><!--end fc-tab-3-->
              <div class="fc-tab-4">
                <div class="contact-container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="contact-form">
                        <div class="heading">
                          <h2>Отзыв о нас</h2>
                        </div>
                        <form action="admin/function/add_comment.php" method="POST">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Введите свою фамилию и имя..." required="">
                          </fieldset>
                          <fieldset>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Введите свой email..." required="">
                          </fieldset>
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Ваш отзыв..." required=""></textarea>
                          </fieldset>
                          <fieldset>
                            <button id="form-submit" class="btn">Отправить</button>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="more-info">
                        <!--<p>Уважаемый гость, Ваш отзыв о моей работе чрезвычайно <em>важен</em>, т.к. хорший отзыв будет вызывать доверие ко мне, а благодря плохим буду <em>исправлять недочеты.</em> Обращаю внимание, что добавляться будут комментарии тех гостей, с которыми мы уже работали.</p>-->
                        
                        <p>
                      </script>
                    <div id="slider" class="slider_wrap">    
                    <?php
                    $commentar = Comment::find()->all();
                    foreach ($commentar as $key => $value) {
                      echo "<div class='com'>";
                      echo $value->name."<br>";
                      echo $value->message."<br>";
                      echo "</div>";
                    }
                    ?>
                    </div>          
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="fc-tab-5">
                <div class="contact-container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="contact-form">
                        <div class="heading">
                          <h2>Заказать бант</h2>
                        </div>
                        <?php 
                          $model = new EntryForm();

                      PJAX::begin([]);
                          $form = ActiveForm::begin([
                                    'id' => 'login-form',
                                    'options' => ['data' => ['pjax' => true]],
                                      
                                    'fieldConfig' => [
                                    //'template' => '{label}<div class="col-sm-10">{input}</div><div class="col-sm-10">{error}</div>',
                                    'labelOptions' => ['class' => 'control-label'],
                                    ],
                          ]);
                          ?>

                          <?= $form->field($model, 'name')->textInput(['placeholder'=>'Ваше имя...'])->label(false)?>
                          <?= $form->field($model, 'email')->textInput(['placeholder'=>'Ваш email...'])->label(false)?>
                          <?= $form->field($model, 'text')->textarea(['placeholder'=>'Ваше сообщение'])->label(false)?>
                        

                              
                              <div class="form-group">
                                  <?= Html::submitButton('Отправить', ['class' => 'btn']) ?>
                              </div>

                          <?php ActiveForm::end(); ?>
                      <?php PJAX::end();?>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="contact-form">
                        <div class="heading">
                          <h2>Корзина</h2>
                        </div>
                       <div id="up">
                      <div class="more-info">
                      
                          
                          <?php
                          $session = Yii::$app->session;
                          $lan = $session->get('product');
                        if(empty($lan)){
                          echo "Корзина пуста";
                        }else{    ?>
                        
                           <table>
                          <tr>
                            <th>Наименнование</th>
                            <th>Количество</th>
                            <th>Стоимость</th>
                          </tr>
                          <?php
                          foreach ($lan as $k => $v) {
                            $order = Product::find()->where('id = :id', [':id' => $k])->all();
                            foreach ($order as $key => $value) {
                            echo "<tr>";
                            echo "<td>".$value->title."</td>";
                            echo "<td>".$v."</td>";
                            echo "<td>".$v*$value->price."</td>";
                            echo "</tr>";
                            }
                          }
                        
                          ?>

                          </table> 
                                                <?php
                      
                      

                        echo "<div class='contact-form'><a href='admin/function/unset.php' style='float: right; margin-right: 20px;'><button type='submit' class='btn' style='margin-top: 20px;'>Очистить</button></a></div>";
                    }
                       
                      ?>
                        </div>
                        </div>
                      

                      
                          </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <!-- End .HorizontalTab -->
        
        </div>
        
      </div>
      
    </div>

  </section>
  <!-- End HorizontalTab style 6 -->
  

    <footer>
      <p>Copyright &copy; 2017 bantik.ru</p>
    </footer>
  </div> <!-- /container -->        
<?php $this->endBody() ?>      
</body>
</html>
<?php $this->endPage() ?>