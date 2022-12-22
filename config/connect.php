<?php

class Connect
{

    private function cnt()
    {
        $connect = mysqli_connect('localhost','root','','Product_Manager');
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->cnt();

        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $result;
    }

    public function execute($sql): void
    {
        $connect = $this->cnt();

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }
}