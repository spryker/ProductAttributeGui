<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAttributeGui\Business\Model;

interface ProductAttributeManagerInterface
{

    /**
     * @param int $idProductAbstract
     *
     * @return array
     */
    public function getAttributes($idProductAbstract);

    /**
     * @param int $idProductAbstract
     *
     * @return array
     */
    public function getProductAbstractAttributeValues($idProductAbstract);

}
