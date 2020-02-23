<?php


namespace DBObjects;

use \Exceptions\DbException;
use \DbConnection\DbConnection;

abstract class DBObject
{
    private $fields;
    private $fieldsList = null;

    function __construct(array $fields = null)
    {
        $this->fieldsList = static::getTableFields();

        $this->setDefaultFieldsValues();

        if ($fields) {
            $this->setFields($fields);
        }
    }

    protected function setDefaultFieldsValues()
    {
    }

    public static function getById($id)
    {
        $db = DbConnection::getConnection();
        $fields = $db->executeQuery('SELECT * FROM '.static::getTable().' WHERE id = ?', array($id))->fetch(\PDO::FETCH_ASSOC);
        if (is_array($fields)) {
            $classname = get_called_class();
            $object = new $classname($fields);

            return $object;
        } else {
            throw($e = new \Exception('User not found'));
        }
    }

    public function getField($fieldName)
    {
        if (isset($this->fields[$fieldName])) {
            return $this->fields[$fieldName];
        } else {
            return false;
        }
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getId()
    {
        if (!empty($this->fields['id'])) {
            return $this->fields['id'];
        } else {
            return null;
        }
    }

    public function setFields(array $data)
    {
        foreach($data as $name => $value) {
            $this->setField($name, $value);
        }
    }

    public function setField($name, $value) {
        if (in_array($name, $this->fieldsList)) {
            $this->fields[$name] = $value;
        } else {
            throw new \Exception('Undefiend field "' . $name . '"');
        }
    }

    public static function getTable()
    {
        return null;
    }

    public static function getTableFields()
    {
        $db = DbConnection::getConnection();
        $fields = $db->executeQuery('SHOW COLUMNS FROM `'.static::getTable().'`')->fetchAll();

        $list = [];

        foreach($fields as $field) {
            array_push($list, $field['Field']);
        }

        return $list;
    }

    public function save()
    {
        $db = DbConnection::getConnection();
        $db->save(static::getTable(), $this->getFields(), 'id');
        $this->setField('id', $db->lastInsertId());
    }

    public function remove()
    {
        $db->delete($this->getFields(), "id = ?", $this->id);
    }
}