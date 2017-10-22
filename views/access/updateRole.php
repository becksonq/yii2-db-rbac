<?php
namespace developeruz\db_rbac\views\access;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var  $role */
/** @var  $role_permit */
/** @var  $permissions */

$this->title = Yii::t( 'db_rbac', 'Редактирование роли: ' ) . ' ' . $role->name;

$this->params['breadcrumbs'][] = [ 'label' => 'Users', 'url' => '/permit/user/index' ];
$this->params['breadcrumbs'][] = [ 'label' => Yii::t( 'db_rbac', 'Управление ролями' ), 'url' => [ 'role' ] ];
$this->params['breadcrumbs'][] = Yii::t( 'db_rbac', 'Редактирование' );
?>
<div class="news-index">

	<h1><?= Html::encode( $this->title ) ?></h1>

	<div class="links-form">

      <?php
      if ( !empty( $error ) ) {
          ?>
				<div class="error-summary">
            <?php
            echo implode( '<br>', $error );
            ?>
				</div>
          <?php
      }
      ?>

      <?php $form = ActiveForm::begin( [
          'options' => [
              'class' => 'form'
          ]
      ] ); ?>

		<div class="form-group">
        <?= Html::label( Yii::t( 'db_rbac', 'Название роли' ) ); ?>
        <?= Html::textInput( 'name', $role->name, [ 'class' => 'form-control' ] ); ?>
		</div>

		<div class="form-group">
        <?= Html::label( Yii::t( 'db_rbac', 'Текстовое описание' ) ); ?>
        <?= Html::textInput( 'description', $role->description, [ 'class' => 'form-control' ] ); ?>
		</div>

		<div class="form-group">
        <?= Html::label( Yii::t( 'db_rbac', 'Разрешенные доступы' ) ); ?>
        <?= Html::checkboxList( 'permissions', $role_permit, $permissions, [ 'separator' => '<br>' ] ); ?>
		</div>

		<div class="form-group">
        <?= Html::submitButton( Yii::t( 'db_rbac', 'Сохранить' ), [ 'class' => 'btn btn-success' ] ) ?>
		</div>

      <?php ActiveForm::end(); ?>

	</div>
</div>
