<?php

namespace Drupal\pp_d8cards\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigPPD8cardsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'pp_d8cards.settings';

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'config_pp_d8cards_config';
  }

  /**
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);


    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Configure PP D8 Cards'),
    ];

    $form['message'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message'),
      '#description' => $this->t('Message'),
      '#default_value' => $config->get('message'),
      '#required' => TRUE,
    ];

    $form['is_happy'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Is Happy ?'),
      '#description' => $this->t('Is Happy ?'),
      '#default_value' => $config->get('is_happy'),
    ];

    $form['colors'] = [
      '#type' => 'select',
      '#multiple' => TRUE,
      '#options' => [
        'RED' => t('red'),
        'YELLOW' => t('yellow'),
        'BLUE' => t('blue'),
      ],
      '#title' => $this->t('List of colors'),
      '#default_value' => $config->get('colors'),
      '#required' => FALSE,
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting.
      ->set('message', $form_state->getValue('message'))
      ->set('is_happy', $form_state->getValue('is_happy'))
      ->set('colors', $form_state->getValue('colors'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
