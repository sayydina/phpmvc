<?php

class mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }

    public function getALLmahasiswa()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                   ('', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data)
    {
        $query = "UPDATE siswa SET 
        nama = :nama,
        umur = :umur,
        kelas = :kelas,
        jurusan = :jurusan
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':umur', $data['umur']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':id', $data['id']);

            $this->db->execute();
            
            return $this->db->rowCount();
    
        }
    }

?>