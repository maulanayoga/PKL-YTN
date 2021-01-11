<?php

namespace App\Controllers;

use App\Models\MemberModel;

class MenuController extends BaseController
{
    public function __construct()
    {
        $this->model = new MemberModel();
    }

    public function data_member()
    {
        $data = array(
            'member' => $this->model->findAll(),
        );

        return view('member', $data);
    }

    public function home()
    {
        return view('beranda');
    }

    public function info_kegiatan()
    {
        return view('info');
    }

    public function produk_()
    {
        return view('produk');
    }


    public function tambahMember()
    {
        return view('tambah_member');
    }

    public function simpanMember()
    {
        $data = array(
            'no_hp' => $this->request->getVar('no_hp'),
            'name' => $this->request->getVar('name'),
            'tgl_pemesanan' => $this->request->getVar('tgl_pemesanan'),
        );

        $this->model->insert($data);

        return redirect()->to(base_url('data-member'));
    }

    public function editMember($id)
    {
        $data = array(
            'member' => $this->model->find($id),
        );

        return view('edit_member', $data);
    }

    public function updateMember($id)
    {
        $data = array(
            'no_hp' => $this->request->getVar('no_hp'),
            'name' => $this->request->getVar('name'),
            'tgl_pemesanan' => $this->request->getVar('tgl_pemesanan'),
        );

        $this->model->update($id, $data);
        return redirect()->to(base_url('data-member'));
    }

    public function deleteMember($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('data-member'));
    }


    //--------------------------------------------------------------------

}
