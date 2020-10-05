<?php

/**
 * @see       https://github.com/mezzio/mezzio-swoole for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-swoole/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-swoole/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Mezzio\Swoole\Event;

use Swoole\Http\Server as SwooleHttpServer;
use Swoole\Server\Task as SwooleTask;

class TaskEvent
{
    /** @var SwooleHttpServer  */
    private $server;

    /** @var SwooleTask */
    private $task;

    public function __construct(
        SwooleHttpServer $server,
        SwooleTask $task
    ) {
        $this->server = $server;
        $this->task   = $task;
    }

    public function getServer(): SwooleHttpServer
    {
        return $this->server;
    }

    public function getTask(): SwooleTask
    {
        return $this->task;
    }
}
