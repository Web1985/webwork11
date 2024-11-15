<?php
namespace Drupal\testmodule\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ColulateFactorialForm extends FormBase {

    public function getFormId() {
        return 'factorial_form';
    }
    public function buildForm(array $form, FormStateInterface $form_state) {

        $form = [
            '#type' => 'text',
            '#title' => t('Type your number')
        ];
        return $form;
    }
    public function submitForm(array &$form, FormStateInterface $form_state) {}

}