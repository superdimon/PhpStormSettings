<?php
declare(strict_types=1);

namespace App\DataFixtures;

use $EntityNamespace;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class ${NAME}
 *
 * @package App\DataFixtures
 */
class ${NAME} extends BaseFixture
{
    /**
     * ${NAME} constructor.
     */
    public function __construct()
    {
        \$this->entityClassName = $EntityClassName::class;
        \$this->order = $Order;
    }

    /**
     * @param ObjectManager \$manager
     * @return mixed|void
     */
    protected function loadData(ObjectManager \$manager): void
    {
        \$this->populator->addEntity(\$this->entityClassName, self::ENTITIES_COUNT_$CountWord, [
            'name' => function () {
                return \$this->faker->word;
            }
        ]);
    }
}
