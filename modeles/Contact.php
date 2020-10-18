<?php


class Contact
{

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $mail;
    private string $content;
    private ?string $createdAt;
   

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string|null $createdAt
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }


    /**
     * Envoyer un mail
     *
     * @return bool
     */
    public function add() :bool 
    {
        $db = new Database();

        return $db->insert(
            "INSERT INTO contact(firstName, lastName, mail, content) 
                    VALUES(?,?,?,?)",
            [$this->firstName, $this->lastName, $this->mail, $this->content]
        );
    }

    /**
     * Afficher un contact
     *
     * @param int $id
     * @return Contact
     */
    public static function show(int $id) : Contact
    {
        $db = new Database();

        return $db->selectOne(
            "Contact",
            "SELECT * FROM contact WHERE id = ?",
            [$id]
        );

    }

    /**
     * Récupérer tous les mail du contact
     *
     * @return array
     */
    public static function list() : array
    {
        $db = new Database();

        return $db->selectMany(
            "Contact",
            "SELECT * FROM contact"
        );
    }

    /**
     * Sypprimer un contact
     *
     * @param int $id
     * @return bool
     */
    public static function delete(int $id) : bool
    {
        $db = new Database();

        return $db->delete(
            "DELETE FROM contact WHERE id = ?",
            [$id]
        );
        
    }

    

    


}