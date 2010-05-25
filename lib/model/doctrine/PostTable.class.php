<?php


class PostTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Post');
    }
    
    public function fetchRandom()
    {
        return $this->createQuery()
                    ->orderBy("RAND()")
                    ->fetchOne();
    }
}