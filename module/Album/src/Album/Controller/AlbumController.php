<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Model\AlbumTable;


class AlbumController extends AbstractActionController
{
    private $table;

    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
    }
    public function indexAction()
    {
        return new ViewModel([
            'albums' => $this->table->fetchAll(),
        ]);
    }
    public function addAction()
    {
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {
    }

    public function getAlbumTable()
    {
//        if (!$this->albumTable) {
//            $sm = $this->getServiceLocator();
//            $this->albumTable = $sm->get('Album\Model\AlbumTable');
//        }
//        return $this->albumTable;
    }


}