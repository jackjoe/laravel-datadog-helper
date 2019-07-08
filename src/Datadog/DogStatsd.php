<?php namespace ChaseConey\LaravelDatadogHelper\Datadog;

class DogStatsd extends \DataDog\DogStatsd
{
    use MetricPrefixTrait;

    public function send($data, $sampleRate = 1.0, $tags = null)
    {
        parent::send($this->wrapSendDataWithMetricPrefix($data), $sampleRate, $tags);
    }
}
