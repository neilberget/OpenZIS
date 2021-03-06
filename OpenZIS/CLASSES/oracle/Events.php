<?php

/**
 * Zend_Db_Table based simpe ORM for the event table
 * Autogenerated by db.php:
 *   timestamp: Sat, 13 Nov 10 15:24:19 -0500
 *   database:  openzis
 *   host:      192.168.1.22
 * 
 * @version $Id$
 */
class Events extends Zend_Db_Table
{
#    protected $_schema = 'OPENZIS';
	protected $_name = 'EVENT';

    protected $_primary = 'event_id';

    protected $_cols = array(
		'event_id'=>'event_id',
		'event_timestamp'=>'event_timestamp', 
		'agent_id_sender'=>'agent_id_sender', 
		'agent_id_rec'=>'agent_id_rec', 
		'event_data'=>'event_data', 
		'object_id'=>'object_id', 
		'status_id'=>'status_id', 
		'action_id'=>'action_id', 
		'msg_id'=>'msg_id', 
		'agent_mode_id'=> 'agent_mode_id', 
		'context_id'=>'context_id', 
		'zone_id'=>'zone_id'
    );
}