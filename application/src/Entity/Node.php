<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Attribut\IdAttribut;
use App\Entity\Attribut\SourceAttribut;
use App\Entity\Attribut\ParentAttribut;
use App\Entity\Attribut\ChildsAttribut;

/**
 *
 * @author kevinfrantz
 * @ORM\Table(name="node")
 * @ORM\Entity(repositoryClass="App\Repository\NodeRepository")
 */
class Node implements NodeInterface
{
    use IdAttribut,
    SourceAttribut, 
    ParentAttribut, 
    ChildsAttribut;
}

