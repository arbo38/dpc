<?php
namespace DPC\AdminBundle\Form\CustomFormClass;

class AdminAction
{
    protected $delete = false;


    public function setDelete($delete)
    {
        $this->delete = $delete;

        return $this;
    }

    public function getDelete()
    {
        return $this->delete;
    }
}

?>