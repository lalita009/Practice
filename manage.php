<?php
/**
 * @file
 * Contains \Drupal\resume\Form\manage_common_static_text_form
 */
namespace Drupal\sos_comman\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class manage_common_static_text_form extends FormBase {
  /**
   * {@inheritdoc}
   */
   function getFormId() {
    return 'sos_comman_form';
  }

  
  public  function variable_set($fist_paarm, $sec_param){
    return \Drupal::state()->set($fist_paarm, $sec_param);
  }

  public  function variable_get($fist_paarm, $sec_param = ""){
    $r = \Drupal::state()->get($fist_paarm);
    return ($r == null) ? $sec_param : $r ;
  }
    /**
   * {@inheritdoc}
   */
   function buildForm(array $form, FormStateInterface $form_state) {



$form['back_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Back Button Label'),
    '#default_value' =>$this->variable_get('back_label', 'Back'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['select_a_case'] = array(
    '#type' => 'textfield',
    '#title' => t('Select a Case Label'),
    '#default_value' => $this->variable_get('select_a_case', 'Select a Case'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['skip_intro'] = array(
    '#type' => 'textfield',
    '#title' => t('Skip Intro Label'),
    '#default_value' =>$this->variable_get('skip_intro', 'Skip Intro'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['answersheet_warning_button'] = array(
    '#type' => 'textfield',
    '#title' => t('Answer Sheet warning button on pop up page'),
    '#default_value' => $this->variable_get('answersheet_warning_button', 'I want the answers!'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $answersheet_warning_text =$this->variable_get('answersheet_warning_text', array('value' => '', 'format' => 'filtered_html'));
  $form['answersheet_warning_text'] = array(
    '#type' => 'text_format',
    '#format' => isset($answersheet_warning_text['format']) ? $answersheet_warning_text['format'] : NULL,
    '#title' => t('Answer Sheet warning text on pop up page'),
    '#default_value' => $answersheet_warning_text['value'],
    '#cols' => 40,
    '#rows' => 3,
    '#required' => FALSE,
  );

  $answer_top_text =$this->variable_get('answer_top_text', array('value' => '', 'format' => 'filtered_html'));
  $form['answer_top_text'] = array(
    '#type' => 'text_format',
    '#format' => isset($answer_top_text['format']) ? $answer_top_text['format'] : NULL,
    '#title' => t('Top Text on Answer Page'),
    '#default_value' => $answer_top_text['value'],
    '#cols' => 40,
    '#rows' => 3,
    '#resizable' => TRUE,
    '#required' => FALSE,
  );

  $form['all_answers_correct'] = array(
    '#type' => 'textfield',
    '#title' => t('Text for All Answers correct on Answer Page'),
    '#default_value' =>$this->variable_get('all_answers_correct', 'Question'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['points_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Label for Points'),
    '#default_value' =>$this->variable_get('points_label', 'Pts'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['question_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Question Label on Answer Page'),
    '#default_value' =>$this->variable_get('question_label', 'Question'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['correct_answer'] = array(
    '#type' => 'textfield',
    '#title' => t('Correct Answer Label on Answer Page'),
    '#default_value' =>$this->variable_get('correct_answer', 'Correct Answer'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['continue_button'] = array(
    '#type' => 'textfield',
    '#title' => t('Continue button on pop up'),
    '#default_value' =>$this->variable_get('continue_button', 'Continue'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );

  $form['mute_unmute'] = array(
    '#type' => 'textfield',
    '#title' => t('Mute/UnMute Speaker Button for Tracking'),
    '#default_value' =>$this->variable_get('mute_unmute', 'Mute/Unmute'),
    '#size' => 60,
    '#maxlength' => 120,
    '#required' => TRUE,
  );


    
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }

 

  /**
   * {@inheritdoc}
   */
   

 
 /**
   * {@inheritdoc}
   */
   function submitForm(array &$form, FormStateInterface $form_state) {
    
 //   $data = [];
   // $data = $form_state->getValues();
  // dd($data['candidate_name']);
   // drupal_set_message($this->t('@can_name ,Your application is being submitted!', array('@can_name' => $form_state->getValue('candidate_name'))));
   foreach ($form_state->getValues() as $key => $value) {
    $this->variable_set($key, $value);

   }
   drupal_set_message("updated successfully");
   }
 }