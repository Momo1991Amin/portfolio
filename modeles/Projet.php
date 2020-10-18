<?php


class Projet
{

    private int $id;
    private string $titre;
    private string $description;
    private string $lienSite;
    private string $maquette;

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
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLienSite(): string
    {
        return $this->lienSite;
    }

    /**
     * @param string $lienSite
     */
    public function setLienSite(string $lienSite): void
    {
        $this->lienSite = $lienSite;
    }

    /**
     * @return string
     */
    public function getMaquette(): string
    {
        return $this->maquette;
    }

    /**
     * @param string $maquette
     */
    public function setMaquette(string $maquette): void
    {
        $this->maquette = $maquette;
    }


    /**
     * Ajouter un projet
     *
     * @return bool
     */
    public function add() :bool
    {
        $db = new Database();

        return $db->insert(
            "INSERT INTO projets(titre, `description`, lienSite, maquette) 
                    VALUES(?,?,?,?)",
            [$this->titre, $this->description, $this->lienSite ,$this->maquette]
        );
    }

    /**
     * Récupération d'un projet par l'identifiant
     *
     * @param int $id
     * @return Projet|null
     */
    public static function getById(int $id): ?Projet
    {
        $db = new Database();
        $result = $db->selectOne(
            "Projet",
            "SELECT * FROM projets WHERE id = ?",
            [$id]
        );
        if($result == false)
            return null;
        return $result;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function edit(int $id) : bool
    {
        $db = new Database();

        return $db->edit(
            "UPDATE projets SET `titre` = ?, description = ?, lienSite = ?, maquette = ?  WHERE id = ?",
            [$this->titre, $this->description, $this->lienSite, $this->maquette, $id]
        );
    }

    /**
     * Afficher un Projet
     *
     * @param int $id
     * @return Projet|null
     */
    public static function show(int $id) : ?Projet
    {
        $db = new Database();

        $result = $db->selectOne(
            "Projet",
            "SELECT * FROM projets WHERE id = ?",
            [$id]
        );

        if($result == false) 
            return null;
        return $result;

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
            "Projet",
            "SELECT * FROM projets"
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
            "DELETE FROM projets WHERE id = ?",
            [$id]
        );

    }



}