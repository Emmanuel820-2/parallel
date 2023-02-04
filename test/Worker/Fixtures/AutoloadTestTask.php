<?php declare(strict_types=1);

namespace Amp\Parallel\Test\Worker\Fixtures;

use Amp\Cache\AtomicCache;
use Amp\Cancellation;
use Amp\Parallel\Worker\Task;
use Amp\Sync\Channel;

class AutoloadTestTask implements Task
{
    public function run(Channel $channel, AtomicCache $cache, Cancellation $cancellation): bool
    {
        return \class_exists('CustomAutoloadClass', true);
    }
}
