<?php

class simplePhpApi
{

  public function __construct()
  {
    if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'POST'))
    {
      $this->data = $_POST;
    }
    elseif (!strcasecmp($_SERVER['REQUEST_METHOD'], 'GET')) {
      $this->data = $_GET;
    }
    elseif (!strcasecmp($_SERVER['REQUEST_METHOD'], 'DELETE')) {
      parse_str(file_get_contents('php://input'), $_DELETE);
      return $_DELETE;
      $this->data = $_DELETE;
    }
    elseif (!strcasecmp($_SERVER['REQUEST_METHOD'], 'PUT')) {
      parse_str(file_get_contents('php://input'), $_PUT);
      $this->data = $_PUT;
    }
  }

  /**
   *
   *
   * @url GET /
   */
  public function nothing()
  {
    return "GET request";
  }
  /**
   *
   *
   * @url POST /
   */
  public function test()
  {
    return "POST request";
  }
  /**
   *
   *
   * @url PUT /
   */
  public function test2()
  {
    return "PUT request";
  }
  /**
   *
   *
   * @url DELETE /
   */
  public function checkHealth()
  {
    return "DELETE request";
  }
}

