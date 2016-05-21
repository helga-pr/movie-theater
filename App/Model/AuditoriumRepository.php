<?php

namespace App\Model;

use App\Api\AuditoriumRepositoryInterface;
use App\Core\Model;
use App\Api\Data\AuditoriumInterface;

/**
 * Class AuditoriumRepository
 * @package App\Model
 */
class AuditoriumRepository extends Model implements AuditoriumRepositoryInterface
{
    /**
     * @var string
     */
    private $tableName = 'auditoriums';

    /**
     * AuditoriumRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Auditorium[]
     */
    public function getAll()
    {
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName . '`');
        $dbQuery->execute();
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $auditoriums = [];
        foreach ($result as $item) {
            $auditorium = new Auditorium();
            $auditorium->setId($item->{AuditoriumInterface::ID});
            $auditorium->setName($item->{AuditoriumInterface::NAME});
            $auditorium->setSeatsNumber($item->{AuditoriumInterface::SEATS_NUMBER});
            $auditorium->setVipSeats($item->{AuditoriumInterface::VIP_SEATS});
            array_push($auditoriums, $auditorium);
        }

        return $auditoriums;
    }

    /**
     * @param $name
     * @return Auditorium
     */
    public function getByName($name)
    {
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName . '` WHERE `name` = ?');
        $dbQuery->execute([$name]);
        $result = $dbQuery->fetchObject();
        $auditorium = new Auditorium();
        $auditorium->setId($result->{AuditoriumInterface::ID});
        $auditorium->setName($result->{AuditoriumInterface::NAME});
        $auditorium->setSeatsNumber($result->{AuditoriumInterface::SEATS_NUMBER});
        $auditorium->setVipSeats($result->{AuditoriumInterface::VIP_SEATS});

        return $auditorium;
    }
}
