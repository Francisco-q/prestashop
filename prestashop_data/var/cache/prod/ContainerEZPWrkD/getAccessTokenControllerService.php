<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDECLNxL0rJgOcP'."\n".'xyqdOS4OcKyLcfyIDC9DZeas+H48J8Uvxz89IsRJMXVXdb5GuQpishKA1RMXSR19'."\n".'MFkhjzLsx/++VPpJpftQAVtRXT7b9IjWVw8NlCZ17bugHNQcne75ZtfybAYP0pIZ'."\n".'d2nfB2kh8r2jxsIlHsYyLigDL13VryowJHqciEdmf9HkshTuCIirSfQX0G0UyjzG'."\n".'GemQKUn4DiIdPuX9vx7sfj3kMV1O4D5uqVFOx22pntMdNRTxK71GrFJmvAdVz5JB'."\n".'GAy+Q815cvGPMao4P+npB9x2HxlHHCCOZpN527fbcWCwQU3COu4vW+evqIKzSX8F'."\n".'+vaA8U55AgMBAAECggEAAiaSSWiaanGGl2648fahobjsu67pdVik4BlrGXS0ddZ9'."\n".'3FNUR0htXNw1DFuXVdFL4t9PQqiTyAqeTzRLlgmrJlvfW2g1Qr+WbT9GkDL0sJcT'."\n".'NT7JRH3emiaci1olnZbB+2x8bAVxX5UQ00SzHaZIKf4uxHA2yw92XzCQcdCAOArp'."\n".'+hsXVQexgT7X8gf0/eGeCFAKJnmHlLhx0z2DCgfjZ2bE1/bRRFCJFMDXwbEY464L'."\n".'CeiaQMu4p9L58Y3np3AU5/DcDYGLoR/05KWUfrOql2rNPXaFsvpuAkTr/vbYKojq'."\n".'DZDflyIjBYQw4ZGP/xx967+drkVW0IdRwmvLhKplTQKBgQD68C3WEEBBGKN8297M'."\n".'PwpkqmF/IBebhTZOGaJhVqQH9pHbU6HLq6KwrY4geybOiXTDD3cev1XTFyG/WDuv'."\n".'u4/jzD8ip2xB9DMfvoZv9XpRYI2Ll6dF1N6id6ly67J+IPdMx/VQP7Qmgux+ty2h'."\n".'hptM+OQpH8uPD6TBIiK7mV8qfwKBgQDH/QB0y0sJ4uvuLj7NjD0xM8wqA5Xn5yg1'."\n".'/vNWil6mTwr3IJxO+BnMI+e+grqYdsG/Cd8uJVmWdiK5JM49NbPwQeXjx0mrgc2T'."\n".'aGidwIpcBeKsA7sc//8Di2KXJ9rvZdkipbZH2nlndJJFZYOgmXJmYQCru0tL/Ju8'."\n".'6g5fDsRbBwKBgDvR26tnDlo2TGrsYy1fbdPXhgxvExGg7PQrSjlYFRxM3DJjunM6'."\n".'BDuH9BSsJvEfdXU2j5gF1qjOn93kY74dwUx1mStiq/0BANr1aUjxROp3UObRDTAp'."\n".'cbVbP0rFAzTsGOf11vX9aa2wkj4W3srdstHjl0hyau08tnLP92WvRy9zAoGAJZIK'."\n".'O+bVOg4/dIeLlOH7vPqWKG50AxUSINK8tE1aarP+w16E/vDtJ8S3DLtSgsIMs+8O'."\n".'1oR9yB55d37KoAUuwLwgjCIsXOQN0tuSi9BYLeGNK/One1M8fVX6N5ttLfxcRn4L'."\n".'OIR6ukzUDeV8TPeG3mTq01hkVOon992gxYroqJECgYEAidnxFMsYOKi/K0R7P77w'."\n".'0WXooIyaFv7NUyL8wV2JzVkqEhEfAB1PcTNEWn/CXQN1LUXSIVOmgAP1JyOM//TM'."\n".'s6Lu98w/iB/roGQp1IwgM/GNyw9wpPY8MZlf8gDkw57GABfYoEyVn3tyWcKsweOk'."\n".'BJdAd5tacBE7gwdbK/OSl5M='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000e39868f30465ef7d0393c4fd27a14fdd43bc7faaaa3ff676a587c7f7a0211304cd10927489562d9c2f2fd5f220e03bbe75cbfa59dd931ebbb9d0b5260b7727dc');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
