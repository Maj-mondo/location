<?php

namespace App;
/**
 * Class Validator
 * @property array data
 * @property array rules
 * @property array errors
 * @property array messages
 */
class Validator {
  /**
   * @var array
   */
  private $data;
  /**
   * @var array
   */
  private $rules;
  /**
   * @var array
   */
  private $errors;
  /**
   * @var array
   */
  private $messages = [
    'required' => 'le champ :field est requis',
    'email' => 'le champ :field doit être un email',
    'unique' => 'le champ :field existe déjà',
  ];
  
  /**
   * Validator constructor.
   * @param array $data
   * @param array $rules - Rules string separated by | (ex: required|email|unique:id,users)
   */
  public function __construct ($data, $rules) {
    $this->data = $data;
    $this->rules = $rules;
    $this->errors = [];
    $this->validate();
  }
  
  
  /**
   */
  private function validate () {
    foreach($this->rules as $field => $rulesString) {
      $rules = explode('|', $rulesString);
      foreach($rules as $rule) {
        if (!method_exists($this, $rule)) {
          // throw new \Exception('[Validator::validate] No method matching rule : '.$rule);
        } else {
          $params = explode(':', $rule);
          if (count($params) >= 2) {
            $params = explode(',', $params[1]);
          } else {
            // no params
            $params = [$field];
          }
          call_user_func_array([$this, $rule], $params);
        }
      }
    }
  }
  
  
  public function fails () {
    return count($this->errors) > 0;
  }
  
  
  public function getErrors () {
    return $this->errors;
  }
  
  
  public function addErrorFor ($field, $message) {
    $this->errors[$field][] = $message;
  }
  
  
  private function required ($field) {
    if (!isset($this->data[$field]) || empty($this->data[$field])) {
      $this->addErrorFor($field, preg_replace('/:field/', $field, $this->messages['required']));
    }
  }
  
  
  private function email ($field) {
    if (!isset($this->data[$field]) || !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
      $this->addErrorFor($field, $this->messages['email']);
    }
  }
  
  
  /**
   * field => 'unique:id,clients'
   * @param $field
   * @param $id
   * @param $table
   */
  private function unique ($field, $id, $table) {
    require_once '../db/conn.php';
    global $pdo;
    $req = $pdo->prepare("SELECT $id FROM $table WHERE $id = ?");
    $req->execute([$this->data[$field]]);
    $exists = $req->fetch();
    if ($exists) {
      $this->addErrorFor($field, $this->messages['unique']);
    }
  }
  
  
  /**
   * field => 'exist:id,clients'
   * @param $field
   * @param $id
   * @param $table
   */
  private function exists ($field, $id, $table) {
    require_once '../db/conn.php';
    global $pdo;
    $req = $pdo->prepare("SELECT $id FROM $table WHERE $id = ?");
    $req->execute([$this->data[$field]]);
    $exists = $req->fetch();
    if (!$exists) {
      $this->addErrorFor($field, $this->messages['unique']);
    }
  }
  
}
