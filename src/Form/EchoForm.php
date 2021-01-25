<?php

declare(strict_types=1);

namespace App\Form;

use Yiisoft\Form\FormModel;
use Yiisoft\Validator\Rule\Required;

final class EchoForm extends FormModel
{
    private string $name = '';
    private string $subject = '';
    private string $body = '';
    private ?array $attachFiles = null;

    public function attributeLabels(): array
    {
        return [
            'name' => 'Name',
            'subject' => 'Subject',
            'body' => 'Body',
        ];
    }

    public function formName(): string
    {
        return 'EchoForm';
    }

    public function rules(): array
    {
        return [
            'name' => [new Required()],
            'subject' => [new Required()],
            'body' => [new Required()],
        ];
    }
}
