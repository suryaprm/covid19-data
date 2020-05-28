<?php
Class Deta extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://api.kawalcorona.com/indonesia/provinsi";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    private $urlAPI = 'https://api.kawalcorona.com/';

    // menampilkan data kontak
    public function index(){
            //indonesia
            $data['indonesia'] = $this->readAPI('indonesia');

            //provinsi
            $data['provinsi'] = $this->readAPI('provinsi');

             //global
             $data['global'] = $this->readAPI('global');

             //global positif
             $data['globalpos'] = $this->readAPI('positif');

             //global negatif
             $data['globalsem'] = $this->readAPI('sembuh');

             //global meninggal
             $data['globalmen'] = $this->readAPI('meninggal');

            //provinsi sumut
             $data['sumutprovinsi'] = $this->singleProv();

            $this->load->view('frontend/info/index',$data);           

    }

    public function singleProv($FID=''){
        //indonesia
        $data = $this->readAPI('provinsi');
        $result = [];
        if(empty($FID)){
            $FID = 2;
        }else{
            $FID = $FID;
        }
        foreach($data as $value){
            if($value['attributes']['FID'] == $FID){
                $result = [
                    'provinsi' => $value['attributes']['Provinsi'],
                    'positif' => $value['attributes']['Kasus_Posi'],
                    'sembuh' => $value['attributes']['Kasus_Semb'],
                    'meninggal' => $value['attributes']['Kasus_Meni'],
                ];
            }
        }
        return $result;
    }

    public function readAPI($url='')
    {
        $url = strtolower($url);

        $maskUrl = [
            'indonesia' => 'indonesia',
            'provinsi' => 'indonesia/provinsi',
            'positif' => 'positif',
            'sembuh' => 'sembuh',
            'meninggal' => 'meninggal',
        ];

        $generateUrl = strtr($url, $maskUrl);

        if(empty($url) or !array_key_exists($url, $maskUrl)){
            $readUrl = file_get_contents($this->urlAPI);
        }else{
            $readUrl = file_get_contents($this->urlAPI.$generateUrl);
        }
        $data = json_decode($readUrl, true);
        return $data;
    }

    public function scrap()
    {

        $this->load->view('frontend/info/scrap');
       
    }

}