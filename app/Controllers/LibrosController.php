<?php
namespace App\Controllers;
use App\Models\LibrosModel;
use App\Models\EditorialesModel; // Importamos el modelo de editoriales

class LibrosController extends BaseController
{
    public function index_libros(): string
    {
        $libro = new LibrosModel();
        $editorial = new EditorialesModel(); // Instanciamos el modelo de editoriales
        
        $datos['datos'] = $libro->findAll();
        $datos['editoriales'] = $editorial->findAll(); // Mandamos todas las editoriales a la vista
        
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
        
        return redirect()->to(base_url('libros')); // Usamos redirect por seguridad tras un POST
    }

    public function eliminar($codigo)
    {
        $libro = new LibrosModel();
        $libro->delete($codigo);
        
        return redirect()->to(base_url('libros'));
    }

    public function buscar_libro($codigo)
    {
        $libro = new LibrosModel();
        $editorial = new EditorialesModel();
        
        $datos['datos'] = $libro->find($codigo);
        $datos['editoriales'] = $editorial->findAll(); // Mandamos las editoriales para el Select
        
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
        
        return redirect()->to(base_url('libros'));
    }        
}