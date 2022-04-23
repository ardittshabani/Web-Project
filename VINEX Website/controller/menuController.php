<?php
    require_once '../config/database.php';

    class MenuController {
        public $db;

        public function __construct(){
            $this->db = new Database;
        }
        /*GET METHOD */
        public function getAluminumCoil(){
            $query = $this->db->pdo->query('SELECT * FROM aluminum_coil');

            return $query->fetchAll();
        }

        public function getAluminumPlate(){
            $query = $this->db->pdo->query('SELECT * FROM aluminum_plate');

            return $query->fetchAll();
        }

        public function getBolts(){
            $query = $this->db->pdo->query('SELECT * FROM bolts');

            return $query->fetchAll();
        }

        public function getNuts(){
            $query = $this->db->pdo->query('SELECT * FROM nuts');

            return $query->fetchAll();
        }

        /*INSERT METHOD */
        public function insertAluminumCoil($request){
            $query = $this->db->pdo->prepare('INSERT INTO aluminum_coil (kodi, foto, thincness, width, pershkrimi)
                VALUES (:kodi, :foto, :thincness, :width, :pershkrimi)');

            $query->bindParam(":kodi", $request['kodi']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":thincness", $request['thincness']);
            $query->bindParam(":width", $request['width']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            return header('Location: admin-home.php');
        }

        public function insertAluminumPlate($request){
            $query = $this->db->pdo->prepare('INSERT INTO aluminum_plate (kodi, foto, pershkrimi)
                VALUES (:kodi, :foto, :permasat)');

            $query->bindParam(":kodi", $request['kodi']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":permasat", $request['permasat']);

            $query->execute();

            return header('Location: admin-home.php');
        }

        public function insertBolts($request){
            $query = $this->db->pdo->prepare('INSERT INTO bolts (foto, titulli, diametri, pershkrimi)
                VALUES (:foto, :titulli, :diametri, :pershkrimi)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":diametri", $request['diametri']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            return header('Location: admin-home.php');
        }

        public function insertNuts($request){
            $query = $this->db->pdo->prepare('INSERT INTO nuts (titulli, foto, pershkrimi)
                VALUES ( :titulli, :foto, :pershkrimi)');

            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            return header('Location: admin-home.php');
        }

        /*EDIT METHOD */
        public function editAluminumCoil($id){
            $query = $this->db->pdo->prepare('SELECT * FROM aluminum_coil WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function editAluminumPlate($id){
            $query = $this->db->pdo->prepare('SELECT * FROM aluminum_plate WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function editBolts($id){
            $query = $this->db->pdo-prepare('SELECT * FROM bolts WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        public function editNuts($id){
            $query = $this->db->pdo-prepare('SELECT * FROM nuts WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();

            return $query->fetch();
        }

        /*UPDATE METHOD */
        public function updateAluminumCoil($request, $id){
            $query = $this->db->pdo->prepare('UPDATE aluminum_coil 
                                            SET kodi = :kodi, 
                                            foto = :foto, 
                                            thincness = :thincness, 
                                            width = :width, 
                                            pershkrimi = :pershkrimi
                                            WHERE id = :id');
            $query->bindParam(':kodi', $request['kodi']);  
            $query->bindParam(':foto', $request['foto']);
            $query->bindParam(':thincness', $request['thincness']);
            $query->bindParam(':width', $request['width']);
            $query->bindParam(':pershkrimi', $reques['pershkrimi']);
            $query->bindParam(':id', $id); 

            $query->execute();

            return header('Location: mesages-dashboard.php');
        }

        public function updateAluminumPlate($request, $id){
            $query = $this->db->pdo->prepare('UPDATE aluminum_plate 
                                            SET kodi = :kodi, 
                                            foto = :foto, 
                                            permasat = :permasat
                                            WHERE id = :id');
            $query->bindParam(':kodi', $request['kodi']);  
            $query->bindParam(':foto', $request['foto']);
            $query->bindParam(':permasat', $reques['permasat']);
            $query->bindParam(':id', $id); 

            $query->execute();

            return header('Location: ../Dashboard/admin-home.php');
        }

        /*DELETE METHOD */
        public function deleteAluminumCoil($id){
            $query = $this->db->pdo->prepare('DELETE FROM aluminum_coil WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            
            return header('Location: admin-home.php');
        }

        public function deleteAluminumPlate($id){
            $query = $this->db->pdo->prepare('DELETE FROM aluminum_plate WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            
            return header('Location: admin-home.php');
        }

        public function deleteBolts($id){
            $query = $this->db->pdo->prepare('DELETE FROM bolts WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            
            return header('Location: admin-home.php');
        }

        public function deleteNuts($id){
            $query = $this->db->pdo->prepare('DELETE FROM nuts WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            
            return header('Location: admin-home.php');
        }
    }
?>