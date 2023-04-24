<?php

namespace Vendor\PackageWithSeeder;

use WebSupply\Seeder\Annotations\Seeder;

#[Seeder(name: 'customer-name')]
final class CustomerSeeder
{
    public function __invoke() {}
}
