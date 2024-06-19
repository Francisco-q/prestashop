<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.customer.address' shared service.

return $this->services['prestashop.core.grid.factory.customer.address'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.customer.address'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_Customer_AddressService.php')), ($this->services['prestashop.core.grid.data_provider.customer_address_decorator'] ?? $this->load('getPrestashop_Core_Grid_DataProvider_CustomerAddressDecoratorService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
