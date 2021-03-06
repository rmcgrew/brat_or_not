<?php

/**
 * BaseVote
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property boolean $is_brat
 * @property integer $post_id
 * @property Post $Post
 * 
 * @method integer getId()      Returns the current record's "id" value
 * @method boolean getIsBrat()  Returns the current record's "is_brat" value
 * @method integer getPostId()  Returns the current record's "post_id" value
 * @method Post    getPost()    Returns the current record's "Post" value
 * @method Vote    setId()      Sets the current record's "id" value
 * @method Vote    setIsBrat()  Sets the current record's "is_brat" value
 * @method Vote    setPostId()  Sets the current record's "post_id" value
 * @method Vote    setPost()    Sets the current record's "Post" value
 * 
 * @package    brat_or_not
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVote extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vote');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'unsigned' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('is_brat', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
        $this->hasColumn('post_id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => true,
             'notnull' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Post', array(
             'local' => 'post_id',
             'foreign' => 'id',
             'cascade' => array(
             0 => 'delete',
             )));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}