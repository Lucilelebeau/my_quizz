<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseRepository")
 */
class Reponse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reponse_expected;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class)
     */
    /*protected $question;

    public function __toString()
    {
        $format = "Reponse (id: %s, id_question: %s, reponse: %s, reponse_expected: %s)\n";
        return sprintf($format, $this->id, $this->id_question, $this->reponse, $this->reponse_expected);
    }*/



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getid_question(): ?int
    {
        return $this->id_question;
    }

    public function setid_question(?int $id_question): self
    {
        $this->id_question = $id_question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getreponse_expected(): ?int
    {
        return $this->reponse_expected;
    }

    public function setreponse_expected(?int $reponse_expected): self
    {
        $this->reponse_expected = $reponse_expected;

        return $this;
    }
}
