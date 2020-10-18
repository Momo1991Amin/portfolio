<?php

class ProjetController extends AbstractController
{

    public function newProjet() {
        $alert = [];
        $sucess = [];

        if(isset($_POST["submit_projet"])) {

            if(!empty($_FILES["image"])) {
                $file_name = $_FILES['image']['name'];
                $file_extension = strrchr($file_name,'.');
                $file_tmp_name = $_FILES["image"]["tmp_name"];
                //$file_dest = "assets/images/upload/".$file_name;
                $extensions_autorisees = array('.png','.gif','.jpg','.jpeg','.webp');

                if(in_array($file_extension, $extensions_autorisees) ) {
                    if(move_uploaded_file($file_tmp_name, "assets/images/upload/".basename($_FILES["image"]["name"]))) {

                        $newProjet = new Projet();
                        $newProjet->setTitre($_POST["titre"]);
                        $newProjet->setDescription($_POST["description"]);
                        $newProjet->setLienSite($_POST["lienSite"]);
                        $newProjet->setMaquette(basename($_FILES["image"]["name"]));

                        if(!$newProjet->add()) {
                            $alert = "vous n'avez pas ajouter votre projet";;
                        } else {
                            $sucess = "votre projet as bien été ajouter";
                        }
                    } else {
                        $alert = "Une erreur est survenue lors de l'envoi du fichier";
                    }
                } else{
                    $alert =  "Le fichier n'est pas au bon format";
                }
            } else {
                $alert = "Veuillez remplir tous les champs";
            }
        }

        $this->renderView("admin/add_projet_view",
            [
                'alert' => $alert,
                'sucess' => $sucess
            ]
        );
    }

    public function editprojet() {

        $alert = [];
        $sucess = [];

        if(isset($_GET["id"])) {
            $id = htmlspecialchars($_GET["id"]);

            if(isset($_POST["edit_projet"])) {
                if(!empty($_POST["titre"])) {

                    $projet = Projet::getById($id);
                    $imageActuelle =$projet->getMaquette();

                    $fileName = $_FILES["image"]["name"];
                    $file_tmp_name = $_FILES["image"]["tmp_name"];

                    $editProjet = new Projet();
                    $editProjet->setTitre($_POST["titre"]);
                    $editProjet->setDescription($_POST["description"]);
                    $editProjet->setLienSite($_POST["lienSite"]);

                    if($_FILES["image"]["size"] > 0) {
                        unlink("assets/images/upload/".$imageActuelle);

                        if(move_uploaded_file($file_tmp_name, "assets/images/upload/".basename($fileName))) {
                            $editProjet->setMaquette(basename($fileName));
                        }
                    } else {
                        $editProjet->setMaquette($imageActuelle);
                    }

                   if(!$editProjet->edit($id)) {
                        $alert = "Une erreur est survenue !!!";
                   } else {
                        $sucess = "Votre projet a bien été modifier";
                   }
                }
            }
        }

        $this->renderView("admin/edit_projet_view",
            [
                "pro" => Projet::getById($_GET["id"]),
                "alert" => $alert,
                "sucess" => $sucess
            ]
        );
    }

    public function allProjets() {

        $this->renderView("admin/list_projet_view",
            [
                "all_projets" => Projet::list()
            ]
        );
    }

    public function delete() {

        if(isset($_GET["id"])) {
            $id = htmlspecialchars($_GET["id"]);
            Projet::delete($id);
        }

        $this->redirectTo("index.php?class=projet&action=allprojets");
    }

}



