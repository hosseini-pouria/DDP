<?php

namespace Src\ProductAccess;

use App\Models\Product;
use App\Models\User;

abstract class Verifier
{
    private Verifier $nextVerifier;

    /**
     * @param Verifier|null $nextVerifier
     */
    public function __construct(?Verifier $nextVerifier)
    {
        $this->nextVerifier = $nextVerifier;
    }

    public function verify(User $user, Product $product): bool
    {
        if (!$this->nextVerifier) {
            return true;
        }

        return $this->nextVerifier->verify($user, $product);
    }
}
