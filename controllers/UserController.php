<?php


class UserController extends AbstractController
{

    public function admin()
    {
        $session = new Session();

        if(!$session->isAdmin()) {
            $this->redirectTo("index.php?class=user&action=login");
        }
        $this->renderView("admin/index_view");

    }

    public function login()
    {
        $message = null;
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $u = User::getByEmail(htmlentities($_POST['email']));
            if ($u instanceof User) {
               if(password_verify(htmlspecialchars($_POST["password"]), $u->getPassword())) {
                   $session = new Session();
                   $session->login($u);

                  if ($u->getRole() === "admin") {
                       $this->redirectTo("index.php?class=user&action=admin");
                  }
                
               } else {
                   $message = "Mot de passe incorrect ";
               }

            } else {
                $message = "Email inconnu";
            }
        }

        $this->renderView( "login", [
            "message" => $message,

        ] );
    }

    public function logout()
    {
        $session = new Session();
        $session->logout();

        $this->redirectTo( "index.php" );
    }

}