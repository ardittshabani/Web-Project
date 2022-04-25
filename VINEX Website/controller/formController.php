<?php
    require_once '../config/database.php';

    class FormController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }
        /*Contact Us Form */
        public function getMesages(){
            $query = $this->db->pdo->query('SELECT * FROM contact');

            return $query->fetchAll();
        }

        public function insertMesages($request){
            $query=$this->db->pdo->prepare('INSERT INTO contact (emri, email, titulli, msg)
                VALUES (:emri, :email, :titulli, :msg)');
            $query->bindParam(":emri", $request['emri']);   
            $query->bindParam(":email", $request['email']); 
            $query->bindParam(":titulli", $request['titulli']) ;
            $query->bindParam(":msg", $request['msg']);  
            $query->execute();

        }

        public function deleteMesages($id){
            $query = $this->db->pdo->prepare('SELECT * FROM contact where id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: mesages-dashboard.php');
        }

        /*Users Form */
        public function getUsers(){
            $query = $this->db->pdo->query('SELECT * FROM users');

            return $query->fetchAll();
        }

       /* public function getUserAdmin($username, $pasword){
            $query = $this->db->pdo->query('SELECT * from users where username = :username and pasword = :pasword');

            $query->bindParam(":username",$username);
            $query->bindParam(":pasword",$pasword);
            $query->execute();
            return $query->fetchAll();
        }*/

        /*Sign in Admin-Simple user method */

        public function signAdminUser($username, $pasword){
            $query = getUsers();
            
            foreach ($query as $item){
                if ((strcmp($item['username'], $username) ==0) && (strcmp($item['pasword'], $pasword) ==0) ){
                    if ($item['roli'] == 1){
                        return header('Location: ../Dashboard/admin-home.php');
                    }else {
                        return header('Location: ../pages/index.php');
                    }
                }

            }
        }

        public function insertUsers($request){
            $query = $this->db->pdo->prepare('INSERT INTO users (emri, email, username, pasword, roli)
                VALUES (:emri, :email, :username, :pasword, :roli)');
            $query->bindParam(":emri", $request['emri']);   
            $query->bindParam(":email", $request['email']); 
            $query->bindParam(":username", $request['username']) ;
            $query->bindParam(":pasword", $request['pasword']);  
            $query->bindParam(":roli", $request['roli']); 
            $query->execute();

            return header('Location: sign.php');
        }

        public function editUsers($id){
            $query = $this->db->pdo->prepare('SELECT * FROM users WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function updateUsers($request, $id){
            $query = $this->db->pdo->prepare('UPDATE users 
                                            SET emri = :emri, 
                                            email = :email, 
                                            username = :username, 
                                            pasword = :pasword, 
                                            roli = :roli
                                            WHERE id = :id');
            $query->bindParam(':emri', $request['emri']);  
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':username', $request['username']);
            $query->bindParam(':pasword', $request['pasword']);
            $query->bindParam(':roli', $reques['roli']);
            $query->bindParam(':id', $id); 

            $query->execute();

            return header('Location: mesages-dashboard.php');
        }

        public function deleteUsers($id){
            $query = $this->db->pdo->prepare('DELETE FROM users WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            
            return header('Location: mesages-dashboard.php');
        }

    }
?>  