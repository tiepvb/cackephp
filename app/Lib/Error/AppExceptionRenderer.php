<?php
App::uses('ExceptionRenderer', 'Error');

class AppExceptionRenderer extends ExceptionRenderer {

    /**
     * Generic handler for the internal framework errors CakePHP can generate.
     *
     * @param CakeException $error The exception to render.
     * @return void
     */
    protected function _cakeError(CakeException $error) {
        $url = $this->controller->request->here();
        $code = ($error->getCode() >= 400 && $error->getCode() < 506) ? $error->getCode() : 500;
        $this->controller->response->statusCode($code);
        $response = Configure::read('ApiResponse.Error');
        $response['code'] = $code;
        $response['message'] = h($error->getMessage());
        $this->controller->buildApiResponseData($response);

        $this->controller->set($error->getAttributes());
        $this->_outputMessage($this->template);
    }

    /**
     * Convenience method to display a 400 series page.
     *
     * @param Exception $error The exception to render.
     * @return void
     */
    public function error400($error) {
        $message = $error->getMessage();
        if (!Configure::read('debug') && $error instanceof CakeException) {
            $message = __d('cake', 'Not Found');
        }
        $url = $this->controller->request->here();
        $this->controller->response->statusCode($error->getCode());
        $response = Configure::read('ApiResponse.Error');
        $response['code'] = $error->getCode();
        $response['message'] = h($error->getMessage());
        $this->controller->buildApiResponseData($response);

        $this->_outputMessage('error400');
    }

    /**
     * Convenience method to display a 500 page.
     *
     * @param Exception $error The exception to render.
     * @return void
     */
    public function error500($error) {
        $message = $error->getMessage();
        if (!Configure::read('debug')) {
            $message = __d('cake', 'An Internal Error Has Occurred.');
        }
        $url = $this->controller->request->here();
        $code = ($error->getCode() > 500 && $error->getCode() < 506) ? $error->getCode() : 500;
        $this->controller->response->statusCode($code);
        $response = Configure::read('ApiResponse.Error');
        $response['code'] = $code;
        $response['message'] = h($error->getMessage());
        $this->controller->buildApiResponseData($response);
        $this->_outputMessage('error500');
    }

    /**
     * Convenience method to display a PDOException.
     *
     * @param PDOException $error The exception to render.
     * @return void
     */
    public function pdoError(PDOException $error) {
        $url = $this->controller->request->here();
        $code = 500;
        $this->controller->response->statusCode($code);
        $response = Configure::read('ApiResponse.Error');
        $response['code'] = $code;
        $response['message'] = h($error->getMessage());
        $this->controller->buildApiResponseData($response);
        $this->_outputMessage($this->template);
    }

}
?>