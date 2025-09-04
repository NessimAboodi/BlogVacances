<?php
class User{
    private int $id;
    private string $name;
    private string $mail;
    private string $password;


    public function construct(int $id, string $name = "", string $mail = "" , string $password = "") {
        $this->id = $id;
        $this->name = $name;
        $this->email = $mail;
        $this->password = $password;
    }

public function getId(): int {
        return $this->id;
    }
    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getMail(): string {
        return $this->mail;
    }
    public function setMail(string $mail): void {
        $this->mail = $mail;
    }





  public function getPassword(): string {
        return $this->password;
    }

public function setPassword(string $password): void {
        $this->password = $password;
    }






















 
