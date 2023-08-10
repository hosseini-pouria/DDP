<?php

namespace Src\ProductAccess;

use App\Models\Product;
use App\Models\User;
use Src\ProductAccess\Verifiers\ActivationVerifier;
use Src\ProductAccess\Verifiers\SubscriptionExpirationVerifier;
use Src\ProductAccess\Verifiers\SubscriptionVerifier;
use Src\ProductAccess\Verifiers\UserActivationVerifier;

class AccessVerifier
{
    public function verify(User $user, Product $product): bool
    {
        return $this->bulidVerifierChain()->veriFy($user, $product);
    }

    private function bulidVerifierChain(): Verifier
    {
        $activationVerifier = new ActivationVerifier();
        $expirationVerifier = new SubscriptionExpirationVerifier($activationVerifier);
        $subscriptionVerifier = new SubscriptionVerifier($expirationVerifier);
        return new UserActivationVerifier($subscriptionVerifier);
    }
}
