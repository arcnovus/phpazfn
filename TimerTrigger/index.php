<?php
use Azserverless\Context\FunctionContext;

function run(FunctionContext $context) {
    $context->log->info('Timer trigger invoked');
}
?>