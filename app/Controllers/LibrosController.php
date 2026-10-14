<?php
namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index_libros(): string
    {
        $libro = new LibrosModel();
        $datos['datos'] = $libro->findAll();
        return view('libros', $datos);
    }

    public function insertar()
    {
        $datos = [
            'titulo'            => $this->request->getPost('txt_titulo'),
            'fecha_publicacion' => $this->request->getPost('txt_fecha_publicacion'),
            'precio'            => $this->request->getPost('txt_precio'),
            'editorial_id'      => $this->request->getPost('txt_editorial_id'),
            'isbn'              => $this->request->getPost('txt_isbn')
        ];
        $libro = new LibrosModel();
        $libro->insert($datos);
        
        return $this->index_libros();
    }

    public function eliminar($codigo)
    {
        $libro = new LibrosModel();
        $libro->delete($codigo);
        
        return $this->index_libros();   
    }

    public function buscar_libro($codigo)
    {
        $libro = new LibrosModel();
        $datos['datos'] = $libro->find($codigo);
        return view('form_modificar_libro', $datos);   
    }

    public function modificar_libro()
    {
        $libro = new LibrosModel();
        $codigo = $this->request->getPost('txt_id');
        $datos = [
            'titulo'            => $this->request->getPost('txt_titulo'),
            'fecha_publicacion' => $this->request->getPost('txt_fecha_publicacion'),
            'precio'            => $this->request->getPost('txt_precio'),
            'editorial_id'      => $this->request->getPost('txt_editorial_id'),
            'isbn'              => $this->request->getPost('txt_isbn')
        ];
        $libro->update($codigo, $datos);
        
        return $this->index_libros();
    }        
}