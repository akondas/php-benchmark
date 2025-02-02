<?php

declare(strict_types=1);

namespace PhpBenchmark;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

final class JsonDecodeBench
{
    /**
     * @Revs(1000)
     *
     * @Iterations(5)
     */
    public function benchJsonDecode() : void
    {
        json_decode('{"packages":[],"notify":"https://packagist.org/downloads/%package%","notify-batch":"https://packagist.org/downloads/","providers-url":"/p/%package%$%hash%.json","metadata-url":"/p2/%package%.json","search":"https://packagist.org/search.json?q=%query%&type=%type%","provider-includes":{"p/provider-2013$%hash%.json":{"sha256":"5b108fdf6ff48d2c00a505e3c8296f528ea7641d007388f825d855f5ce96772d"},"p/provider-2014$%hash%.json":{"sha256":"22c0d1e99515a48c05ba003334f879428770929775c3b4047784e65e24b0ad06"},"p/provider-2015$%hash%.json":{"sha256":"5f5850be9ede059ae19987f79cfc7b9dbee0c78ad4f0d4c602983d52fffcb6d7"},"p/provider-2016$%hash%.json":{"sha256":"9a21b3802bf42e1275eb2bdf53e70070d4e9e558101fd657ead6dae83adc3fca"},"p/provider-2017$%hash%.json":{"sha256":"b125dc71ba7a215bb19a2c1f46229f739ad415a844a3ee6c7f0b8301e06b9f84"},"p/provider-2018$%hash%.json":{"sha256":"4a66ee63c062d02d16fb46188c7effc1583dec3814b95d4f1bef44ddd4366940"},"p/provider-2019$%hash%.json":{"sha256":"379993cf23ee2a71ab58fd0cd825ae827a4eafcc1a4742184eb13092d021735b"},"p/provider-2019-04$%hash%.json":{"sha256":"1daafd3c154bbb4795c18d166ba9a75b5baaf556d92fa44c839a8f1c21d335a2"},"p/provider-2019-07$%hash%.json":{"sha256":"7993c715e63c61d415e12dd567bcda36be798f27bad03dfc58fe2d7a843a3c82"},"p/provider-2019-10$%hash%.json":{"sha256":"ffd14b4982f53474d7d69a71cf28b5fafa4c35c6e0507acbdf52751c2f554dc1"},"p/provider-2020-01$%hash%.json":{"sha256":"a6b6a69a352c7b0a6a372278f5068a1adf46933458f363a33034a41d7ff8b1ae"},"p/provider-archived$%hash%.json":{"sha256":"4a75884d496a014d1259d89666357df3cffa7bc1962e689623f9c6c62292a48b"},"p/provider-latest$%hash%.json":{"sha256":"99393237c2ed6437be100aea39faac4f6518edbbe21e8cc3fe596951937f51b6"}}}', true);
    }

    /**
     * @Revs(1000)
     *
     * @Iterations(5)
     */
    public function benchUnserialize(): void
    {
        unserialize('a:7:{s:8:"packages";a:0:{}s:6:"notify";s:41:"https://packagist.org/downloads/%package%";s:12:"notify-batch";s:32:"https://packagist.org/downloads/";s:13:"providers-url";s:24:"/p/%package%$%hash%.json";s:12:"metadata-url";s:18:"/p2/%package%.json";s:6:"search";s:55:"https://packagist.org/search.json?q=%query%&type=%type%";s:17:"provider-includes";a:13:{s:27:"p/provider-2013$%hash%.json";a:1:{s:6:"sha256";s:64:"5b108fdf6ff48d2c00a505e3c8296f528ea7641d007388f825d855f5ce96772d";}s:27:"p/provider-2014$%hash%.json";a:1:{s:6:"sha256";s:64:"22c0d1e99515a48c05ba003334f879428770929775c3b4047784e65e24b0ad06";}s:27:"p/provider-2015$%hash%.json";a:1:{s:6:"sha256";s:64:"5f5850be9ede059ae19987f79cfc7b9dbee0c78ad4f0d4c602983d52fffcb6d7";}s:27:"p/provider-2016$%hash%.json";a:1:{s:6:"sha256";s:64:"9a21b3802bf42e1275eb2bdf53e70070d4e9e558101fd657ead6dae83adc3fca";}s:27:"p/provider-2017$%hash%.json";a:1:{s:6:"sha256";s:64:"b125dc71ba7a215bb19a2c1f46229f739ad415a844a3ee6c7f0b8301e06b9f84";}s:27:"p/provider-2018$%hash%.json";a:1:{s:6:"sha256";s:64:"4a66ee63c062d02d16fb46188c7effc1583dec3814b95d4f1bef44ddd4366940";}s:27:"p/provider-2019$%hash%.json";a:1:{s:6:"sha256";s:64:"379993cf23ee2a71ab58fd0cd825ae827a4eafcc1a4742184eb13092d021735b";}s:30:"p/provider-2019-04$%hash%.json";a:1:{s:6:"sha256";s:64:"1daafd3c154bbb4795c18d166ba9a75b5baaf556d92fa44c839a8f1c21d335a2";}s:30:"p/provider-2019-07$%hash%.json";a:1:{s:6:"sha256";s:64:"7993c715e63c61d415e12dd567bcda36be798f27bad03dfc58fe2d7a843a3c82";}s:30:"p/provider-2019-10$%hash%.json";a:1:{s:6:"sha256";s:64:"ffd14b4982f53474d7d69a71cf28b5fafa4c35c6e0507acbdf52751c2f554dc1";}s:30:"p/provider-2020-01$%hash%.json";a:1:{s:6:"sha256";s:64:"a6b6a69a352c7b0a6a372278f5068a1adf46933458f363a33034a41d7ff8b1ae";}s:31:"p/provider-archived$%hash%.json";a:1:{s:6:"sha256";s:64:"4a75884d496a014d1259d89666357df3cffa7bc1962e689623f9c6c62292a48b";}s:29:"p/provider-latest$%hash%.json";a:1:{s:6:"sha256";s:64:"99393237c2ed6437be100aea39faac4f6518edbbe21e8cc3fe596951937f51b6";}}}');
    }
}
