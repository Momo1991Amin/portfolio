<?php


class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $role;

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        //$this->password = $password;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * Stocker un utilisateur dans la BDD
     *
     * @return bool
     */
    public function add(): bool
    {
        $db = new Database();
        return $db->insert(
            "INSERT INTO `user` (firstName, lastName, email, password)
                            VALUES (?, ?, ?, ?)",
            [$this->firstName, $this->lastName, $this->email, $this->password]
        );
    }

    /**
     * Récupération d'un utilisateur par adresse email
     *
     * @param string $email
     * @return User|null
     */
    public static function getByEmail(string $email): ?User
    {
        $db = new Database();
        $result = $db->selectOne(
            "User",
            "SELECT * FROM user WHERE email LIKE ?",
            [$email]
        );
        if($result == false)
            return null;
        return $result;
    }


    /**
     * Récupération d'un utilisateur par identifiant
     *
     * @param int $id
     * @return User|null
     */
    public static function getById(int $id): ?User
    {
        $db = new Database();
        $result = $db->selectOne(
            "User",
            "SELECT * FROM user WHERE id = ?",
            [$id]
        );
        if($result == false)
            return null;
        return $result;
    }

    /**
     * Récupération d'un utilisateur par son prénom
     *
     * @param string $firstName
     * @return User|null
     */
    public static function getByName(string $firstName): ?User
    {
        $db = new Database();

        $result = $db->selectOne(
            "User",
            "SELECT * FROM user WHERE firstName LIKE ?",
            [$firstName]
        );

        if($result == false)
            return null;
        return $result;
    }


    /**
     * Récupération tous les utilisateurs de la BDD
     *
     * @return array
     */
    public static function getAll(): array
    {
        $db = new Database();
        return $db->selectMany(
            "User",
            "SELECT * FROM user"
        );
    }

}