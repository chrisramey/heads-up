<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 * @property Student $Student
 * @property Notetype $Notetype
 */
class Note extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'note_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'student_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'notetype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Student' => array(
			'className' => 'Student',
			'foreignKey' => 'student_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Notetype' => array(
			'className' => 'Notetype',
			'foreignKey' => 'notetype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
