<?php 
    class Response{
        public static function resposta($status = 200, $message = 'sucess', $data = null){
            //Aqui vai o corpo da resposta
            header('Content-Type: application/json');


            if(API_IS_ACTIVE){
                return json_encode([
                'status' => 400,
                'mensagem' => 'A API não está funcionando!',
                'api_version' => API_VERSION,
                'time_response' => time(),
                'data_atual' => date('Y-a-d H:i:s'),
                'dados' => null
                ]);
            }

            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'api_version' => API_VERSION,
                'time_response' => time(),
                'data_atual' => date('Y-a-d H:i:s'),
                'dados' => $data
            ]);
        }
    }
?>