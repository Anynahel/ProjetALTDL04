
<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{    function getType() {
        return $this->type;
    }

    function getIdRole() {
        return $this->idRole;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setIdRole($idRole) {
        $this->idRole = $idRole;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", options={"default"=2})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;


}
