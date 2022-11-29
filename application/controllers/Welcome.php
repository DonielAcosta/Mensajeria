<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;


class Welcome extends CI_Controller {

	public function index(){
   
		// $this->load->view('welcome_message');

    $sid = 'ACbb39d3c009896c990791cca070073524';
    $token = 'a349af80027a4935985ceea4f740f349';

    $number = "+14256007380";

    $client = new Client($sid, $token);
    $client->messages->create(
        '+584120749550',
        array(
            'from' => $number,
            'body' => 'probando drocerca!'
        )
    );
	}

  /**
   * It sends an SMS message to the number specified in the  variable.
   */
  public function sendSMS() {

    $cliente = $_POST['cliente'];   //option de prueba 
    $id_templade = $_POST['id'];    //option de prueba
    
    $this->load->model('mensajeria_model');
    $sms = $this->mensajeria_model->datacli($cliente);
    $templade = $this->mensajeria_model->templade($id_templade);

    //validaciones
    $cli =  $sms[0]->cliente;  // cliente en base de datos
    $numberCLI = $sms[0]->telefon2;   //numero del cliente a enviar mensaje 
    $numberCLI =str_replace(' ', '', $numberCLI); // para que no tenga espacios en blanco
    $numberCLI = preg_replace('/-/', '', $numberCLI); // para que no tenga -
    $numberCLI = substr($numberCLI, 1); // empiece desde primera posicion ejemplo 4120749550
    $templade = $templade[0]->templade;


    /* Mensajeria sms */
    //para pruebas 
    // $numberCLI = $_POST['numero']; 
    // $templade = $_POST['mensaje'];

    $sid = 'ACbb39d3c009896c990791cca070073524';
    $token = 'a349af80027a4935985ceea4f740f349';

    $number = "+14256007380";

    $client = new Client($sid, $token);
    $client->messages->create(
      '+58'.$numberCLI,
        array(
            'from' =>$number,
            'body' => $templade
        )
    );
    print('enviando con exito '); // mensaje para visualizar en posman terminal o web pruebas 
  }
}

