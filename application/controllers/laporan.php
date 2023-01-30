<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_laporan');
        $this->load->library('pdf_report');
    }

    public function index()
    {
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $this->session->set_userdata('tanggal_awal', $tgl_awal);
        $this->session->set_userdata('tanggal_akhir', $tgl_akhir);
        if (empty($tgl_awal) or empty($tgl_akhir)) {
            $isi['content'] = 'laporan/lap_view';
            $isi['judul'] = 'Laporan';
            $isi['data'] = $this->m_laporan->getAllData();
        } else {
            $isi['content'] = 'laporan/lap_view';
            $isi['judul'] = 'Laporan';
            $isi['data'] = $this->m_laporan->filterData($tgl_awal, $tgl_akhir);
        }
        $this->load->view('dash_view', $isi);
    }

    public function view_pdf()
    {
        if (empty($this->session->userdata('tanggal_awal')) or empty($this->session->userdata('tanggal_akhir'))) {
            $isi['data'] = $this->m_laporan->getAllData();
            $this->load->view('laporan/view_pdf', $isi);
        } else {
            $isi['data'] = $this->m_laporan->filterData($this->session->userdata('tanggal_awal'), $this->session->userdata('tanggal_akhir'));
            $this->load->view('laporan/view_pdf', $isi);
        }
    }
}
