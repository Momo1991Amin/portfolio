<?php


class ContactController extends AbstractController
{
    public function addContact()
    {
        $message = null;
        //$succes = null;

        if(!empty($_POST) && isset($_POST["btnContact"])) {

            if (isset($_POST["firstname"]) && isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["message"])) {
                if (!empty($_POST["firstname"]) && !empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["message"])) {

                    $contact = new Contact();

                    $contact->setFirstName($_POST["firstname"]);
                    $contact->setLastName($_POST["name"]);
                    $contact->setMail($_POST["mail"]);
                    $contact->setContent($_POST["message"]);

                    if(!$contact->add()) {
                        $message = "Erreur est survenue !!!";
                    } else {
                        $message = "Votre message a bien été envoyé. Merci de m'avoir contacté !!!";
                    }
                } else {
                    $message = "Vous devez remplir tous les champs !";
                }
            } else {
                $message = "Une erreur s'est produite. Reessayez !";
            }
        }


        $this->renderView("contact_view",
            [
                "message" => $message
            ]
        );
    }

    public function list()
    {

    }
}