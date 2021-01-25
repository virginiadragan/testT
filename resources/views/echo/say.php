<?php

declare(strict_types=1);

/**
 * @var $csrf string
 * @var $form Yiisoft\Form\FormModel
 * @var $url UrlGeneratorInterface
 * @var $field Field
 */

use App\Widget\FlashMessage;
use Yiisoft\Form\Widget\Field;
use Yiisoft\Form\Widget\Form;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;

?>


<?= FlashMessage::widget() ?>

<div>

    <?= Form::widget()
        ->action($url->generate('echo/say'))
        ->options(
            [
                'id' => 'form-say',
                'csrf' => $csrf,
                'enctype' => 'multipart/form-data',
            ]
        )
        ->begin() ?>

    <?= $field->config($form, 'name') ?>
    <?= $field->config($form, 'subject') ?>
    <?= $field->config($form, 'body')
        ->textArea(['class' => 'form-control textarea', 'rows' => 2]) ?>
    <?= $field->config($form, 'attachFiles')
        ->inputCssClass('form-control')
        ->fileInput(
            ['type' => 'file', 'multiple' => 'multiple', 'name' => 'attachFiles[]'],
            true,
            ) ?>

    <?= Html::submitButton(
        'Submit',
        [
            'class' => 'btn btn-primary mt-3'
        ]
    ) ?>

    <?= Form::end() ?>

</div>
