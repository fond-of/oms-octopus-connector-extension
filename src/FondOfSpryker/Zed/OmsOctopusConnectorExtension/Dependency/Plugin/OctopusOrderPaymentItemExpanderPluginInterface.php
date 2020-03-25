<?php

namespace FondOfSpryker\Zed\OmsOctopusConnectorExtension\Dependency\Plugin;

use Generated\Shared\Transfer\OctopusOrderPaymentItemTransfer;
use Generated\Shared\Transfer\PaymentTransfer;

interface OctopusOrderPaymentItemExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the OctopusOrderPaymentItemTransfer with extra information.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\OctopusOrderPaymentItemTransfer $octopusOrderPaymentItemTransfer
     * @param \Generated\Shared\Transfer\PaymentTransfer $paymentTransfer
     *
     * @return \Generated\Shared\Transfer\OctopusOrderPaymentItemTransfer
     */
    public function expand(
        OctopusOrderPaymentItemTransfer $octopusOrderPaymentItemTransfer,
        PaymentTransfer $paymentTransfer
    ): OctopusOrderPaymentItemTransfer;
}