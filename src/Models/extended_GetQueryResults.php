<?php

namespace serwin35\IluoIntegration\Models;

class extended_GetQueryResults{

    protected $sessionId;
    protected $query;

  public function __construct($sessionId, $query)
  {
    $this->sessionId    = $sessionId;
    $this->query        = $query;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getQuery()
  {
    return $this->query;
  }
}

class extended_GetQueryResultsResponse
{

  protected $extended_GetQueryResultsResult;

  public function __construct($extended_GetQueryResultsResult)
  {
    $this->extended_GetQueryResultsResult = $extended_GetQueryResultsResult;
  }

  public function extended_GetQueryResultsResult()
  {
    return $this->extended_GetQueryResultsResult;
  }
}
