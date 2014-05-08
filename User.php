<?php
class User extends AppModel{
    public $name = 'User';
    
    public function beforeSave($options = array()){
        if(isset($this->data['User']['password'])){
            $this->data['User']['password']=AuthComponent::password($this->data['User']['password']);
        }
        return true;
    }
}
?>