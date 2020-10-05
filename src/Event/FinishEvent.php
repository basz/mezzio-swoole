<?php

/**
 * @see       https://github.com/mezzio/mezzio-swoole for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-swoole/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-swoole/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Swoole\Event;

use Swoole\Http\Server as SwooleHttpServer;

class FinishEvent
{
    /** @var SwooleHttpServer */
    private $server;

    /** @var int */
    private $taskId;

    /** @var mixed */
    private $data;

    /**
     * @param mixed $data
     */
    public function __construct(
        SwooleHttpServer $server,
        int $taskId,
        $data
    ) {
        $this->server = $server;
        $this->taskId = $taskId;
        $this->data   = $data;
    }

    public function getServer(): SwooleHttpServer
    {
        return $this->server;
    }

    public function getTaskId(): int
    {
        return $this->taskId;
    }

    /** @return mixed */
    public function getData()
    {
        return $this->data;
    }
}
