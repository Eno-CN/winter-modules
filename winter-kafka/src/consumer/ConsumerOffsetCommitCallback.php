<?php
declare(strict_types=1);

namespace dev\winterframework\kafka\consumer;

use dev\winterframework\core\context\ApplicationContext;
use RdKafka\KafkaConsumer;

interface ConsumerOffsetCommitCallback {

    public function __construct(ConsumerConfiguration $config, ApplicationContext $ctx);

    public function __invoke(KafkaConsumer $kafka, int $err = 0, array $partitions = null): void;
}