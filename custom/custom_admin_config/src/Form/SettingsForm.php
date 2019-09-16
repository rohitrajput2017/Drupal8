<?php
/**
 * @file
 * Contains Drupal\custom_admin_config\Form\SettingsForm.
 */
namespace Drupal\custom_admin_config\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Class SettingsForm.
 *
 * @package Drupal\custom_admin_config\Form
 */
class SettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'custom_admin_config.settings',
    ];
  }
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_form';
  }
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('custom_admin_config.settings');
    $form['message'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Message'),
      '#default_value' => $config->get('message'),
    );
    return parent::buildForm($form, $form_state);
  }
  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $this->config('custom_admin_config.settings')
      ->set('message', $form_state->getValue('message'))
      ->save();
  }
}