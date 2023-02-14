<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ChafusersModel;

class Homedash extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Homedash';
        echo view('Homedash', $data);
    }

    public function store()
    {
        $request = \Config\Services::request();
        if ($request->getMethod() == 'post') {
            helper(['form']);
            $rules =
             
            [
                'firstname'        => 'required|min_length[4]|max_length[100]',
                'lastname'         => 'required|min_length[4]|max_length[100]',
                'email'            => 'required|min_length[8]|max_length[100]|valid_email|is_unique[chafusers.email]'
                
            ];

            if ($this->validate($rules)) {
                $this->Insert();
                return redirect()->to('/homedash');
            } else {
                $data['validation'] = $this->validator;
                echo view('homedash', $data);
            }
        }
    }

    public function Insert()
    {
        $request = \Config\Services::request();

        $data =

        [
            'firstname' => $request->getVar('firstname'),
            'lastname'  => $request->getVar('lastname'),
            'email'     => $request->getVar('email')
        ];

        $db =\Config\Database::connect();

        /*$builder = $db->table('chafusers');
        $builder->insert($data);*/

        $model = new ChafusersModel();
        $model->insert($data);

        return redirect()->to('/homedash');
    }

    Public function show()
    {
        $model = new ChafusersModel();
        $data['table'] = $model->findAll();
        echo view ('list',$data);
    }

    Public function edit($id)
    {
        $model = new ChafusersModel();
        $data['row']= $model->where('id',$id)->first();
        echo view('edit',$data);

    }

    public function Update()
    {
        $request = \Config\Services::request();

        $model = new ChafusersModel();

        $id = $request->getVar('id');

        $data =
        [
            'firstname' => $request->getVar('firstname'),
            'lastname'  => $request->getVar('lastname'),
            'email'     => $request->getVar('email')
        ];

        $db =\Config\Database::connect();

        // $builder = $db->table('chafusers');
        // $builder->where('id', $id);
        // $builder->update($data);

        $model->update($id,$data);

        return redirect()->to(site_url('Homedash/show'));
    }

    Public function delete($id)
    {
        $request = \Config\Services::request();

        $model = new ChafusersModel();
        $model->where('id',$id)->delete();

        return redirect()->to(site_url('/Homedash/show/'));
    }

}