<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/buah', function (Request $request, Response $response) {
	$query = $this->db->prepare('SELECT * FROM buah');
	$result = $query->execute();
	if ($result) {
		if ($query->rowCount()) {
			$data = array(
				'kode' => 1,
				'keterangan' => 'Sukses',
				'data' => $query->fetchAll());
		}else{
			$data = array(
				'kode' => 2,
				'keterangan' => 'Tidak ada data',
				'data' => null);
		}
	}else{
		$data = array(
			'kode' => 100,
			'keterangan' => 'Terdapat error',
			'data' => null);
	}
    return $response->withJson($data);
});