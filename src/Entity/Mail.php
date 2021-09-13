<?php

namespace App\Entity;

use App\Repository\MailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MailRepository::class)
 */
class Mail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailer_surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentary;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_adress;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_of_post;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailerName(): ?string
    {
        return $this->mailer_name;
    }

    public function setMailerName(string $mailer_name): self
    {
        $this->mailer_name = $mailer_name;

        return $this;
    }

    public function getMailerSurname(): ?string
    {
        return $this->mailer_surname;
    }

    public function setMailerSurname(string $mailer_surname): self
    {
        $this->mailer_surname = $mailer_surname;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(string $commentary): self
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getEmailAdress(): ?string
    {
        return $this->email_adress;
    }

    public function setEmailAdress(string $email_adress): self
    {
        $this->email_adress = $email_adress;

        return $this;
    }

    public function getDateOfPost(): ?\DateTimeInterface
    {
        return $this->date_of_post;
    }

    public function setDateOfPost(\DateTimeInterface $date_of_post): self
    {
        $this->date_of_post = $date_of_post;

        return $this;
    }
}
